<?php
$mainPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); 
$mainPath = rtrim($mainPath, '/');
print( $mainPath);
switch($mainPath){
    case ' ':
    case '/':
         require(__DIR__.'/view/home.php');
         break;
  case '/admin':
     require __DIR__. '/view/admin/adminArea.php';
     break;
    default:
         require __DIR__ .  '/view/error.php';
         break;
        }
        ?>