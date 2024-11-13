<?php
//This page views categories for admin.
session_start();
include_once($_SERVER['DOCUMENT_ROOT'] . '/comp1230/assignments/assignment2/controller/categoryController.php');
require_once('./navigation.php');
navigationBar();

?>
<h1>Categories</h1>

<button type="button" class="btn btn-warning float-md-right btn-toolbar"><a href="<?php __DIR__.'/view/admin/addCategory.php'>">Add New Category</a></button>


</ul>
</div>
<table border="1" width="100%">
  <tbody>
    <tr>
      <th>Name</th>
      <th>Description</th>
      <th>Number of Items</th>
      <th>Action</th>
      <tr>
    
          <?php
 include_once('../model/categoryDatabase.php');
$displayCategories=new categoryDatabase();
$displayCategories->displayCategoryResults();  
 ?> 
        


  </tbody>  

</table>
</body>

</html>