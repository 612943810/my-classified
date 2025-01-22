<?php
session_start();
$_SESSION['loggedIn'] = false;
?>
<nav class='navbar navbar-expand-lg navbar-light bg-primary'>
    <div class='container-fluid'>
        <a class='navbar-brand text-warning' href="/">My Classified Ads</a>
        <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#mainNavigation' aria-controls='mainNavigation' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse' id='mainNavigation'>
            <ul class='navbar-nav me-auto'>
                <li class='nav-item active'>
                    <a class='nav-link text-warning active' href="/">Home</a>
                </li>
       
            </ul>
            <ul class='navbar-nav ms-auto'>    
                <li class='nav-item'>
                   <a class='nav-link text-warning' href='/search'>Search</a> 
                </li>
                <?php
                if (!isset($_SESSION['loggedIn']) || !$_SESSION['loggedIn']) {
                ?>
                    <li class='nav-item'>
                        <a class='nav-link text-warning' href="./view/login.php">Login</a>
                    </li>
                <?php
                } else {
                ?>      
                 <li class='nav-item'>
                    <a class='nav-link text-warning' href='/../view/viewItems.php'>Items</a>
                </li>
                <li class='nav-item dropdown'>
                    <a class='nav-link dropdown-toggle text-warning' href='/categories' id='dropdownMenu'>Categories</a>
                </li>
              
                    <li class='nav-item'>
                        <form action="./logout.php" method="post" class="d-inline">
                            <button class='btn btn-success'>Log Out</button>
                        </form>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
</nav>
