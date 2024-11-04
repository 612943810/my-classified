<?php
//This page is the admin items view page.
include_once($_SERVER['DOCUMENT_ROOT'] . '/comp1230/assignments/assignment2/controller/categoryController.php');
require_once('./navigation.php');
navigationBar();  
?>

<div class="row">
<nav class=" col-2">
<h3>Categories</h3>

 <div class="nav flex-column px-4 ">
<?php
$displayCategories=new categoryDatabase();
$displayCategories->displayCategoryResults();  
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