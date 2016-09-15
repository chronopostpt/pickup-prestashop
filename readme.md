===================================================
Chronopost Pickup (pickme)  v1.3.2 installation steps
===================================================

Installation procedure
-----------------------------------------------
1) Copy the extracted "pickme_chronopost" folder 
to your modules folder inside Prestashop main folder

2) Make sure the webserver has read/write
privileges to this folder and has outbound TCP
port 7790 unblocked by firewall.

3) Log in to the administration console to
install this module:

-> Modules -> Chronopost Pickup -> Install

4) Configure this module:

-> Modules -> Chronopost Pickup -> Configure


Once installed, every order with Chronopost Pickup
selected as shipping method, will have the information
of the store the user picked.



**URL for auto-update of Pickup Points database ( to be called by cron ):**

PRESTASHOP_BASE_URL + /modules/pickme_chronopost/async/updatePickUpDatabase.php

example: http://prestashop.example.com/modules/pickme_chronopost/async/updatePickUpDatabase.php
