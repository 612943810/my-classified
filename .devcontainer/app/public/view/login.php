<?php
session_start();
include_once(__DIR__.'/../controller/UserController.php');     
$loginUser = new User();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userName = $_POST['userNameEntry'];
    $userPassword = $_POST['userPasswordEntry'];
    $loginUser->userLogin($userName, $userPassword);
}
?>
<!-- HTML form for login -->
<form method="POST" action="">
    <input type="text" name="userNameEntry" placeholder="Username" required>
    <input type="password" name="userPasswordEntry" placeholder="Password" required>
    <button type="submit">Login</button>
</form>



