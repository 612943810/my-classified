<?php
//This logs out the sessions and website.

require_once('../controller/User.php');
$userData=new User();
$userData->logoutSession();





?>
