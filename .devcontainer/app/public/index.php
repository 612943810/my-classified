<?php
include_once(__DIR__.'/controller/HomeController.php');
include_once(__DIR__.'/controller/CategoryController.php');
include_once(__DIR__.'/controller/ItemController.php');
include_once(__DIR__.'/controller/UserController.php');
$mainPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); 
$totalQuery = new PDO('mysql:dbname=my-classified;host=db', 'root', 'mysqlcee');
switch($mainPath){
    case ' ':
    case '/':
        require_once(__DIR__.'/view/home.php');
     $homeControl=new HomeController();
     $homeControl->home();
         break;
     case "/categories":
          $categoryData=new CategoryController();
          $categoryData->viewCategories();
          break;
     case "/categories/add":
        $categoryData=new CategoryController();
          if ($_SERVER['REQUEST_METHOD'] === 'POST') {
               $name = filter_input(INPUT_POST, 'textInput');
               $description = filter_input(INPUT_POST, 'descriptionInput');
               $categoryData->addCategories($name, $description);
               header('Location:/categories');
               break;
          } 
          require(__DIR__. '/view/admin/categories/addCategory.php');
          break;
     case "/categories/modify":
          if ($_SERVER['REQUEST_METHOD'] === 'POST') {
               $categoryData = new CategoryController();
               $categoryData->modifyCategories();
               header('Location: /categories');
              break;
           } else {
               require __DIR__ . '/view/admin/categories/modifyCategories.php';
           }
          break;
     case "/categories/delete":
          if ($_SERVER['REQUEST_METHOD'] === 'POST') {
               $categoryData = new CategoryController();
               if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $categoryData->deleteCategory($id);
                    header('Location: /categories');
                    exit();
               }
          } else {
               require __DIR__ . '/view/admin/categories/deleteCategory.php';
          }
          break;
          case "/items":
               $itemData = new ItemController();
               $itemData->listItems();
               break;
          case "/items/add":
               if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $title = filter_input(INPUT_POST, 'textInput');
                    $description = filter_input(INPUT_POST, 'descriptionInput');
                    $price = filter_input(INPUT_POST, 'priceEntry');
                 
                    $imageContent = file_get_contents($_FILES['image']['tmp_name']);
                    

                    $categoryID = filter_input(INPUT_POST, 'dropDownList');
                    $itemData = new  ItemController();
                    $itemData->addItems($title, $description, $imageContent, $price, $categoryID);
                    header('Location: /items');
                    exit();
               }
               require __DIR__.'/view/admin/items/addItems.php';
               break;
          case "/items/modify":
               require __DIR__.'/view/admin/items/modifyItem.php';
               break;
          case "/items/delete":
               require __DIR__.'/view/admin/items/deleteItem.php';
               break;
case "/search":
     require __DIR__.'/view/searchForm.php'; 
     break;     
  case '/admin':
     require __DIR__. '/view/admin/adminArea.php';
     break;
     case '/login':
          session_start();
          $loginUser=new User();
          $loginUser->userLogin('test', 'demo');
          $_SESSION['loggedIn']=true;
          header('Location:/admin');
          break;
     case '/logout':
          $logoutUser=new User();
          $logoutUser->logoutSession();
          break;
    default:
         require __DIR__ .  '/../view/error.php';
         break;
}
?>