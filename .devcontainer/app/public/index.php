<?php
$mainPath=$_SERVER['REQUEST_URI'];
print( $mainPath);
switch($mainPath){
    case ' ':
    case '/':
        echo $mainPath;
         require(__DIR__.'/view/home.php');
         break;
    default:
         echo "Route not found: " . $request;
         http_response_code(404);
         require __DIR__ .  '/view/error.php';
         break;
        }
        ?>