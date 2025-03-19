<?php
session_start();

// Include the CategoryController to display categories
include_once(__DIR__ . '/../../../controller/CategoryController.php');

// Include the Items model to display items
require_once(__DIR__ . '/../../../model/Item.php');

// Include the navigation bar
require_once(__DIR__ . '/../../../view/navigation.php');

// Set loggedIn to true (you might want to move this to a more appropriate place, like a login script)
$_SESSION['loggedIn'] = true;

// Instantiate the Category and Items classes
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
                    // Display categories
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
