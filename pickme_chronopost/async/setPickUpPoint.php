<?php

header('Content-type: text/javascript');
include_once '../../../config/config.inc.php';
include_once '../../../init.php';

$msg = new StdClass;
if (!Tools::getIsset('pickup_store') && !trim(Tools::getValue('pickup_store'))){
    $msg->status='error';
    echo (json_encode($msg));
    exit;
}

$pickup_store = Tools::getValue('pickup_store');

$context = Context::getContext();

$context->cookie->__set('pickup_store',$pickup_store); 

$msg->status='ok';

echo (json_encode($msg));

exit;
