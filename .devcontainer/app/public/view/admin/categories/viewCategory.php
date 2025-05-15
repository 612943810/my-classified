<?php
session_start();
require_once(__DIR__. '/../../../view/navigation.php'); 


?>
<html lang='en'>
<head>
       <meta charset='UTF-8'>
       <meta name='viewport' content='width=device-width, initial-scale=1.0'>
       <meta http-equiv='X-UA-Compatible' content='ie=edge'>
       <title>My Classified</title>
       <link rel='stylesheet' href='/css/bootstrap.css'>
       <link rel='stylesheet'   href='/css/style.css'> 
   <body>
<h1>Categories</h1>

<button type="button" class="btn btn-warning float-md-right btn-toolbar"><a href="/categories/add">Add New Category</a></button>


</ul>
</div>
<table border="1" width="100%">
<thead>
  
      <th>Name</th>
      <th>Description</th>
      <th>Number of Items</th>
      <th>Action</th>
</thead>
   <tbody>   
    
   </tr>
   
      <?php foreach($categories as $cat) : ?>     
    <tr>
    
 
     <td><?php echo $cat['name']; ?></td> 
       <td><?php echo $cat['description']; ?></td>
         <td><?php echo $cat['number_of_items']; ?></td>
         <td>
         <button type="button" class="btn btn-primary"><a href="/categories/modify?id=<?php echo $cat['id']; ?>">Modify</a></button>
         <button type="button" class="btn btn-danger"><a href="/categories/delete?id=<?php echo $cat['id']; ?>">Delete</a></button>
         </td>

</tr>
<?php endforeach; ?>     
</tbody>  
</table>
</body>
</html>