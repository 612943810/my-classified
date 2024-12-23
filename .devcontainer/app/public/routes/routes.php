<?php
include_once(__DIR__.'/../controller/HomeController.php');
include_once(__DIR__.'/../controller/CategoryController.php');
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
         $categoryData=new categoryController();
          if ($_SERVER['REQUEST_METHOD'] === 'POST') {
               $name = filter_input(INPUT_POST, 'textInput');
               $description = filter_input(INPUT_POST, 'descriptionInput');
               $categoryData->addCategories($name, $description);
               header('Location:/categories');
}
          break;
  case '/admin':
     require __DIR__. '/../view/admin/adminArea.php';
     break;
    default:
         require __DIR__ .  '/../view/error.php';
         break;
        }
        ?>