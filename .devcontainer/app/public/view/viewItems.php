<?php
//This is the viewq tems for admin.

 include_once(__DIR__.'/../controller/CategoryController.php');
require_once(__DIR__. '/../view/navigation.php');
?>
<html lang='en'>
<head>
       <meta charset='UTF-8'>
       <meta name='viewport' content='width=device-width, initial-scale=1.0'>
       <meta http-equiv='X-UA-Compatible' content='ie=edge'>
       <title>My Classified</title>
       <link rel='stylesheet' href='../css/bootstrap.css'>
   </head>
   <body>
<div class="row">
<nav class=" col-2">
<h3>Categories</h3>
 <div class="nav flex-column px-4 ">
<?php
$displayCategoriesTwo=new Category();
$displayCategoriesTwo->displayCategoryResults();  
?>  
</div>
</nav>
<article class=" col-7">
<button type="button" class="btn btn-warning float-md-right"><a href="/view/admin/addItems.php">Add New Item</a></button>
</article>
</body>
</html>
