<?php
//This page is a navigation templete  the website.

 ?>
       

    <nav class='navbar navbar-expand-lg navbar-light bg-success'>
   
           <!-- <a class='navbar-brand text-warning' href='#'>My Classified(Dashboard)</a>     -->
           <div class='navbar-expand' id='mainNavigation'>
               <ul class='navbar-nav'>
                   <li class='nav-item active nav-pills bg-bg-light'>
                       <a class='nav-link text-warning active ' href='./index.php'>Home <span class='sr-only'></span></a>
                   </li>   
                   <?php
                   if (session_status()==PHP_SESSION_ACTIVE) {
                    ?>
                        <li class='nav-item col'>
                       <a class='nav-link text-warning' href='./view/viewItemsAdmin.php'>Items</a>
                   </li>
                   <?php
                   }
                   ?>
                   <li class='nav-item col'>
                       <a class='nav-link text-warning' href='./view/viewItemsAdmin.php'>Items</a>
                   </li>
   
                   <li class='nav-item dropdown col-4 '>
                       <a class='nav-link dropdown-toggle text-warning' href='../view/viewCategory.php' id='dropdownMenu'>Categories</a>
                   </li>
                   <li class='nav-item dropdown col-6 '>
                       <a class='nav-link text-warning' href='searchFormAdmin.php' id=''>Search</a>
                   </li> 
                  
           </div>    </li>

       </ul>
   </div>
           <div class='navbar-nav ml-auto'>
               <li class=' nav-item active'>
               
   
 <?php
                 if (session_status()==PHP_SESSION_NONE) {
                ?>
                   <a class='nav-link active text-warning navbar-nav navbar-right'  href="./view/login.php" >Login</a>
         
                <?php
                 }else{
                ?>
              
        <form action="./logout.php">
               <button class='nav-link active text-warning navbar-nav navbar-right' >Login</button>
        </form>
        <?php
                 }
             //   }
        ?>

</nav>   


