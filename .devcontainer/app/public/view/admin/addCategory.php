<?php
//This script displays the add category for admin.
require_once(__DIR__. '/../../controller/categoryController.php');
require_once(__DIR__. '/../navigation.php');
$categoryData=new categoryController();
 $categoryData ->addCategoriesOutput('submitLink','cancelLink','textInput','descriptionInput');
?>
 <html lang='en'>
<head>
       <meta charset='UTF-8'>
       <meta name='viewport' content='width=device-width, initial-scale=1.0'>
       <meta http-equiv='X-UA-Compatible' content='ie=edge'>
       <title>My Classified</title>
       <link rel='stylesheet' href='/css/bootstrap.css'>
   </head>
   <body>
<form class="form-group" action=""name="categoryForm" method="post">
<div class="form-group">
<h1 class="lead">Add a new category</h1>
<div>
    <label for="textInput">Title</label>
<input type="text" name="textInput" id="textInput">
</div>
<div>
<label for="descriptionInput">Description</label>
<textarea class="form-control" name="descriptionInput" id="descriptionInput"></textarea>
</div>
<div>
<div>
<button type="submit"class="btn btn-warning" name="submitLink" > Save Changes</button>
<button type="submit" class="btn btn-warning" name="cancelLink"> Cancel</button>
</div>
</form>   
</body>
</html>
