<?php
//This page views  categories for Visitor.
include_once($_SERVER['DOCUMENT_ROOT'] . '/comp1230/assignments/assignment2/controller/categoryController.php');
require_once('./navigation.php');
navigationBar();

?>
<h1>Categories</h1>

</ul>
</div>
<table border="1" width="100%">
  <tbody>
    <tr>
      <th>Name</th>
      <th>Description</th>
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
