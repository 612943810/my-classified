<?php
include_once(__DIR__.'/../controller/HomeController.php');
include_once(__DIR__.'/../controller/CategoryController.php');
$mainPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); 
$totalQuery = new PDO('mysql:host=db;dbname=my-classified', 'root', 'mysqlcee');
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
        $categoryData=new CategoryController();
          if ($_SERVER['REQUEST_METHOD'] === 'POST') {
               $name = filter_input(INPUT_POST, 'titleModify');
               $description = filter_input(INPUT_POST, 'descriptionModify');
               $categoryData->addCategories($name, $description);
               header('Location:/categories');
               exit();
          } 
          require(__DIR__. '/../view/admin/addCategory.php');
          break;
     case "/categories/modify":
          if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          if (isset($_GET['id'])) {
               $id = $_GET['id'];
               $categoryDisplay = new CategoryController();
               $name = filter_input(INPUT_POST, 'textInput');
               $description = filter_input(INPUT_POST, 'descriptionInput'); 
               $categoryData = $categoryDisplay->modifyCategoriesOutput($name, $description); 
               //
             } 
          }
          require __DIR__.'/../view/admin/modifyCategories.php';
          break;   
     case "/categories/delete":
          break;
case "/search":
     require __DIR__.'/../view/searchForm.php';      
  case '/admin':
     require __DIR__. '/../view/admin/adminArea.php';
     break;
    default:
         require __DIR__ .  '/../view/error.php';
         break;
}
?>