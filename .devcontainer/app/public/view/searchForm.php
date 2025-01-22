<?php
include_once(__DIR__.'/navigation.php');
echo "<br>";
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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form class="row g-3">
                    <div class="col-12 text-center">
                        <input type="search" name="search" class="form-control form-control-lg" id="searchBar">
                        <button type="submit" class="btn btn-warning">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>