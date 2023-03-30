<?php
//This logs out the sessions and website.

require_once('../controller/User.php');
$userData=new User();
$userData->logoutSession();


//This is the main index page opf the website.
include(__DIR__.'/navigation.php');


?>
 <html lang='en'>
<head>
       <meta charset='UTF-8'>
       <meta name='viewport' content='width=device-width, initial-scale=1.0'>
       <meta http-equiv='X-UA-Compatible' content='ie=edge'>
       <title>My Classified</title>
       <link rel='stylesheet' href='./../css/bootstrap.css'>
   </head>
 
   <body>
<h1>You have sucessfully loged out.</h1>
   </body>
 </html>