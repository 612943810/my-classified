<?php
session_start();
require_once(__DIR__.'/../../view/navigation.php');
require_once(__DIR__.'/../../controller/UserController.php');
//$_SESSION['loggedIn']=true;
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
<h1>Welcome to the Dashboard,<?php echo $_SESSION['userName']?></h1>
<li>items</li>
</body>

</html>
