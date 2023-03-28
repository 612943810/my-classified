<?php
//This page logs you in.
include_once("../controller/User.php");
$loginUser=new User();
$loginUser->userLogin('userNameEntry','userPasswordEntry');
      require_once('../view/navigation.php');
      navigationBar();
show_source(__FILE__);
?>
       


