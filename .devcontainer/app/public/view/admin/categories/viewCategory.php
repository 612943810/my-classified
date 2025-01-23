<?php
session_start();
require_once(__DIR__. '/../../../view/navigation.php'); 
include_once(__DIR__.'/../../../model/Category.php');

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
<h1>Categories</h1>

<button type="button" class="btn btn-warning float-md-right btn-toolbar"><a href="/categories/add">Add New Category</a></button>


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

$displayCategories=new Category();
$displayCategories->displayCategoryResults();  
 ?> 
        
</tbody>  
</table>
<
</body>
</html>