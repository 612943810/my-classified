<?php
//This is the viewq tems for admin.
session_start();
 include_once($_SERVER['DOCUMENT_ROOT'] . '/comp1230/assignments/assignment2/controller/categoryController.php');
require_once('./navigation.php');
navigationBar();  
?>
<div class="row">
<nav class=" col-2">
<h3>Categories</h3>
 <div class="nav flex-column px-4 ">
<?php
$displayCategoriesTwo=new categoryDatabase();
$displayCategoriesTwo->displayCategoryResults();  
?>  
</div>
</nav>
<article class=" col-7">
<button type="button" class="btn btn-warning float-md-right"><a href="./addItems.php">Add New Item</a></button>
</article>
</body>
</html>
<?php
show_source(__FILE__);
?>