<?php
session_start();    
require_once(__DIR__. '/../../navigation.php');
?>
<!DOCTYPE html>
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
                <form action="/categories/add" name="categoryForm" method="post" class="justify-content-end">
                    <div class="mb-3">
                        <h1 class="form-label">Add a new category</h1>
                        <div class="mb-3">
                            <label for="textInput">Title</label>
                            <br>
                            <input type="text" class="form-control" name="textInput" id="textInput">
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="descriptionInput">Description</label>
                            <textarea class="form-control" name="descriptionInput" id="descriptionInput"></textarea>
                        </div>
                        <div>
                            <br>
                            <br>
                            <br>
                            <button type="submit" class="btn btn-warning" name="submitLink">Save Changes</button>
                            <button type="submit" class="btn btn-warning" name="cancelLink">Cancel</button>
                        </div>
                    </div>
                </form>   
            </div>
        </div>
    </div>   
</body>
</html>
