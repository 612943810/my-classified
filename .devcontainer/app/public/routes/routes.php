<?php
include_once(__DIR__.'/../controller/HomeController.php');
$mainPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); 
switch($mainPath){
    case ' ':
    case '/':
     $homeControl=new HomeController();
     $homeControl->home();
         break;
     case "/categories":
          require __DIR__.'/../view/admin/viewCategory.php';
          break;
     case "/categories/add":
          require(__DIR__. '/../view/admin/addCategory.php');
  case '/admin':
     require __DIR__. '/../view/admin/adminArea.php';
     break;
    default:
         require __DIR__ .  '/../view/error.php';
         break;
        }
        ?>