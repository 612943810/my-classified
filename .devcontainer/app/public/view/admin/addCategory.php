<?php
//This script displays the add category for admin.
require_once($_SERVER['DOCUMENT_ROOT'] . '/comp1230/assignments/assignment2/controller/categoryController.php');

require_once('./navigation.php');
$categoryData=new categoryController();
 $categoryData ->addCategoriesOutput('submitLink','cancelLink','textInput','descriptionInput');
  
?>
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
