<?php

header('Content-type: text/plain');
include_once '../../../config/config.inc.php';
include_once '../../../init.php';

if (true)
{
	$context = stream_context_create(
	  array(
		'ssl' => array(
		  'verify_peer' => false,
		  'allow_self_signed' => true
		)
	  )
	);
	$client = new SoapClient(
	  Configuration::get('PICKME_WEBSERVICE'),
	  array(
		'stream_context' => $context
	  )
	);

	  $result = $client->getPointList_V3();

	  $pickme_ids = array();

	  foreach ($result->return->lB2CPointsArr as $message) {
		$id_pickme_shop_order = Db::getInstance()->getValue('
		  SELECT id_pickme_shop FROM `'._DB_PREFIX_.'pickme_shops`
		  WHERE pickme_id="'.$message->Number.'"');

		if ($id_pickme_shop_order == "") {
		  $query = '
			INSERT INTO `'._DB_PREFIX_.'pickme_shops`
				   (pickme_id, name, address, postal_code, location)
			VALUES ("'.$message->Number.'", "'.$message->Name.'", "'.$message->Address.'", "'.$message->PostalCode.'", "'.$message->PostalCodeLocation.'")';
		  Db::getInstance()->execute($query);
		} else {
		  $query = '
			UPDATE `'._DB_PREFIX_.'pickme_shops`
			SET name="'.$message->Name.'", address="'.$message->Address.'", postal_code="'.$message->PostalCode.'", location="'.$message->PostalCodeLocation.'"
			WHERE pickme_id="'.$message->Number.'"';
		  Db::getInstance()->execute($query);
		}
		$pickme_ids[$message->Number]=$message->Number;
	  }

	  if (count($pickme_ids)>0) {

		  $query = "DELETE FROM "._DB_PREFIX_.'pickme_shops'." WHERE pickme_id NOT IN('".implode("','",$pickme_ids)."')";
		  echo $query;
		  Db::getInstance()->execute($query);
	  }

	  echo json_encode($pickme_ids);
}
