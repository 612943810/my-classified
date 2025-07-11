<?php
session_start();
require_once(__DIR__ . '/../../../view/navigation.php');
$_SESSION['loggedIn'] = true;
?>

<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>View Items</title>
    <link rel='stylesheet' href='/css/bootstrap.css'>
    <link rel='stylesheet' href='/css/style.css'>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-3">
                <h3>Categories</h3>
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                        <?php foreach ($categoryData as $cat): ?>
                            <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                <?php echo $cat['name']; ?>
                            </a>
                        <?php endforeach; ?>
                </div>
            </nav>
            <main class="col-md-9">
                <article>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h2>Items</h2>
                        <button type="button" class="btn btn-warning">
                            <a href="/view/admin/items/addItems.php" style="text-decoration: none; color: black;">Add New Item</a>
                        </button>
                    </div>
                    <div class="row">
                    </div>
                </article>
            </main>
        </div>
    </div>
    <table border="1" width="100%">
<thead>
  
      <th>Name</th>
      <th>Description</th>
      <th>Image</th>
      <th>Action</th>
</thead>
   <tbody>   

   
      <?php foreach($items as $it) : ?>     
    <tr>
        <td><?php echo $it['title']; ?></td>
        <td><?php echo $it['description']; ?></td>
        <td><img src="/images/<?php echo $it['image']; ?>" alt="Item Image" width="100"></td>
        <td>
            <a href="/items/modify?idModify=<?php echo $it['id']; ?>" class="btn btn-primary">Modify</a>
            <a href="/items/delete?idDelete=<?php echo $it['id']; ?>" class="btn btn-danger">Delete</a>
        </td>           

</tr>
<?php endforeach; ?>     
</tbody>  
</table>
</body>
</html>