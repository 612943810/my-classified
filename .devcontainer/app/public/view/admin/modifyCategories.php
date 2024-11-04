<?php
//This page modifies the categories for admin.
require_once(__DIR__ . DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'controller'.DIRECTORY_SEPARATOR.'categoryController.php');
require_once(__DIR__ .DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'view'.DIRECTORY_SEPARATOR.'navigation.php');
$categoryDisplay=new categoryController();
$categoryDisplay->modifyCategoriesOutput('submitModify','cancelModify','modifyText','modifyDescription');
require_once('./navigation.php');
?> 
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
<?php
show_source(__FILE__);
?>