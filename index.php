<html lang='en'>
<head>
       <meta charset='UTF-8'>
       <meta name='viewport' content='width=device-width, initial-scale=1.0'>
       <meta http-equiv='X-UA-Compatible' content='ie=edge'>
       <title>My Classified</title>
       <link rel='stylesheet' href='./css/bootstrap.css'>
   </head>
   <body>
<?php
//This is the main index page opf the website.
include_once(__DIR__.'/view/navigation.php');
?>
    <article class="jumbotron">

        <h1 class><strong>Welcome My Classified Website</strong></h1>
 <h1>Feel free to look around the site</h1>
 <?php include_once(__DIR__.'/view/addItems.php');?>
    </article>
</body>
</html>
