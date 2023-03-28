<?php
//This page is a navigation templete  the website.
function navigationBar(){
    if (session_status()==PHP_SESSION_ACTIVE) {
        print(" ");
      } elseif (session_status()==PHP_SESSION_NONE) {
        if ($_SERVER['REQUEST_URI']=="/") {
        }
    }
}
            ?>
   <html lang='en'>
<head>
       <meta charset='UTF-8'>
       <meta name='viewport' content='width=device-width, initial-scale=1.0'>
       <meta http-equiv='X-UA-Compatible' content='ie=edge'>
       <title>My Classified</title>
       <link rel='stylesheet' href='./css/bootstrap.css'>
   </head>
   <body>
    <nav class='navbar navbar-expand-lg navbar-light bg-success'>
   
           <!-- <a class='navbar-brand text-warning' href='#'>My Classified(Dashboard)</a>     -->
           <div class='navbar-expand' id='mainNavigation'>
               <ul class='navbar-nav'>
                   <li class='nav-item active nav-pills bg-bg-light'>
                       <a class='nav-link text-warning active ' href='adminArea.php'>Home <span class='sr-only'></span></a>
                   </li>
                   <li class='nav-item col'>
                       <a class='nav-link text-warning' href='viewItemsAdmin.php'>Items</a>
                   </li>
   
                   <li class='nav-item dropdown col-4 '>
                       <a class='nav-link dropdown-toggle text-warning' href='viewCategory.php' id='dropdownMenu'>Categories</a>
                   </li>
                   <li class='nav-item dropdown col-6 '>
                       <a class='nav-link text-warning' href='searchFormAdmin.php' id=''>Search</a>
                   </li>
           </div>
           <div class='navbar-nav ml-auto'>
               <li class=' nav-item active'>
                <form action="/logout.php">
                       <button class='nav-link active text-warning navbar-nav navbar-right'  ><?php ?></button>
                </form>
                
               </li>
   
               </ul>
           </div>
       </nav>

 