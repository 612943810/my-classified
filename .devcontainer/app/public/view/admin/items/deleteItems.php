<?php
session_start();
// This page deletes a category for admin.
require_once(__DIR__ .'/../../../controller/CategoryController.php');
require_once(__DIR__ .'/../../../model/Category.php');
require_once(__DIR__ .'./../../navigation.php');

$categoryController = new CategoryController();

// Ensure the ID is provided
if (isset($_GET['id'])) {
    $categoryId = $_GET['id'];
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $categoryController->deleteCategory($categoryId);
        header('Location: /categories');
        exit();
    }
} else {
    echo "Error: No category ID provided.";
    exit;
}
?> 
<html lang='en'>
<head>
       <meta charset='UTF-8'>
       <meta name='viewport' content='width=device-width, initial-scale=1.0'>
       <meta http-equiv='X-UA-Compatible' content='ie=edge'>
       <title>My Classified</title>
       <link rel='stylesheet' href='/css/bootstrap.css'>
       <link rel='stylesheet' href='/css/style.css'>
   </head>
   <body>
 <h1 class="form-check-inline">Delete category</h1>
<form class="form-group" action="/categories/delete?id=<?php echo $categoryId ?>" method="post"> 
<p>Are you sure you want to delete this category?</p>
<div>
<button type="submit" class="btn btn-danger" name="submitDelete">Delete</button>
<button type="button" class="btn btn-secondary" onclick="window.location.href='/categories'">Cancel</button>
</div>
</form> 
</body>
</html>