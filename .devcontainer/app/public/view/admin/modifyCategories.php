<?php
//This page modifies the categories for admin.
require_once(__DIR__ .'/../../controller/CategoryController.php');
require_once(__DIR__ .'/../../view/navigation.php');
$categoryDisplay=new categoryController();
$categoryDisplay->modifyCategoriesOutput('submitModify','cancelModify','modifyText','modifyDescription');
require_once('./navigation.php');
?> 
<head>
       <meta charset='UTF-8'>
       <meta name='viewport' content='width=device-width, initial-scale=1.0'>
       <meta http-equiv='X-UA-Compatible' content='ie=edge'>
       <title>My Classified</title>
       <link rel='stylesheet' href='/css/bootstrap.css'>
       <link rel='stylesheet' href='/css/style.css'>
   </head>
   <body>
 <h1 class="form-check-inline">Modify category</h1>
<form class="form-group" action="" method="post"> 
<label for="titleModify">Title</label>
<input type="text" class="form-control" id="titleModify"name="modifyText">
<br>
<br>
<label for="descriptionModify">Description</label>
<textarea class="form-control" id="descriptionModify"  name="modifyDescription"></textarea>
<label for="imageEntry">Images</label>
<input type="file" name="imageValue" id="imageValue">
<br>
<div>
<button type="submit" class="btn btn-warning" name="submitModify">Submit</button>
<button type="submit" class="btn btn-warning" name="cancelModify">Cancel</button>
</div>
</form> 
</body>
</html>
