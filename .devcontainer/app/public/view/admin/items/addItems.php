<?
//This script displays the add item for admin.
require_once(__DIR__.'/../../../view/navigation.php');
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
<form class="form-group" action="/items/add" name="categoryForm" method="post" enctype="multipart/form-data">
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
</select>

<div>
<label for="priceEntry">Price</label>
<input type="text" name="priceEntry" id="">  
<br>
<label for="imageEntry">Images</label>
<input type="file" name="image" id="imageValue">
<button type="submit"class="btn btn-warning" name="submitLink" > Save Changes</button>
<button type="submit" class="btn btn-warning"> Cancel</button>
</div>
</form>   
</body>
</html>
