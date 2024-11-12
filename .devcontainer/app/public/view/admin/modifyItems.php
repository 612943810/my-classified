<?php
//This page modifies the items for admin.
require_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR.'comp1230'.DIRECTORY_SEPARATOR.'assignments'.DIRECTORY_SEPARATOR.'assignment2'.DIRECTORY_SEPARATOR.'controller'.DIRECTORY_SEPARATOR.'itemController.php');
require_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR.'comp1230'.DIRECTORY_SEPARATOR.'assignments'.DIRECTORY_SEPARATOR.'assignment2'.DIRECTORY_SEPARATOR.'view'.DIRECTORY_SEPARATOR.'navigation.php');
require_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR.'comp1230'.DIRECTORY_SEPARATOR.'assignments'.DIRECTORY_SEPARATOR.'assignment2'.DIRECTORY_SEPARATOR.'model'.DIRECTORY_SEPARATOR.'itemDatabase.php');
$categoryDisplay=new ItemController();
$categoryDisplay->modifyItemOutput('submitModify','modifyText','modifyDescription','imageValue','modifyPrice');

?> 
 <h1 class="form-check-inline">Modify Item</h1>
<form class="form-group" action="" method="post"> 
<label for="titleModify">Title</label>
<input type="text" class="form-control" id="titleModify"name="modifyText">
<br>
<br>
<label for="descriptionModify">Description</label>
<textarea class="form-control" id="descriptionModify"  name="modifyDescription"></textarea>
<label for="priceModify">Price</label>
<textarea class="form-control" id="priceModify"  name="modifyPrice"></textarea>
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
