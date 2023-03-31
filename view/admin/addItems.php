<?
//This script displays the add item for admin.
require_once($_SERVER['DOCUMENT_ROOT'] . '/comp1230/assignments/assignment2/controller/itemController.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/comp1230/assignments/assignment2/controller/categoryController.php');

require_once('./navigation.php');
$itemyData=new ItemController();
 $itemyData->addItemsOutput('dropDownList','submitLink','textInput','descriptionInput','priceEntry','imageValue');


   
?>

<form class="form-group" action=""name="categoryForm" method="post" enctype="multipart/form-data">
<div class="form-group">
<h1 class="lead">Add new Item</h1>
<div>
    <label for="textInput">Title</label>
<input type="text" name="textInput" id="textInput">
</div>
<div>
<label for="descriptionInput">Description</label>
<textarea class="form-control" name="descriptionInput" id="descriptionInput"></textarea>
</div>

<label for="descriptionInput">Category</label> 
<select name="dropDownList" id="dropDownList"  value="text">
<label for="dropDownList">Category</label>

<?php
$displayCategories=new categoryDatabase();
$displayCategories->displayCategoryResults();  

?>    
   
</select>

<div>
<label for="priceEntry">Price</label>
<input type="text" name="priceEntry" id="">  
<br>
<label for="imageEntry">Images</label>
<input type="file" name="imageValue" id="imageValue">
<button type="submit"class="btn btn-warning" name="submitLink" > Save Changes</button>
<button type="submit" class="btn btn-warning"> Cancel</button>
</div>
</form>   
</body>
</html>
<?php
show_source(__FILE__);
?>