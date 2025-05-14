<?php
session_start();

include_once(__DIR__ . '/../../../controller/CategoryController.php');

require_once(__DIR__ . '/../../../model/Item.php');

require_once(__DIR__ . '/../../../view/navigation.php');
$_SESSION['loggedIn'] = true;

$categoryController = new Category();
$itemsModel = new Item();
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
            <nav class="col-md-2">
                <h3>Categories</h3>
                <div class="nav flex-column px-4">
                    <?php
               
                    $categoryController->displayCategoryResults();
                    ?>
                </div>
            </nav>
            <main class="col-md-10">
                <article>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h2>Items</h2>
                        <button type="button" class="btn btn-warning"><a href="/view/admin/items/addItems.php">Add New Item</a></button>
                    </div>
                    <div class="row">
                        <?php
                        // Display items
                        $itemsModel->displayItemsResults();
                        ?>
                    </div>
                </article>
            </main>
        </div>
    </div>
</body>
</html>
