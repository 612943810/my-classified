<?php
//This is the admin home page.
session_start();
require_once('./navigation.php');
navigationBar();
require_once('../controller/User.php');
?>
<h1>Welcome to the Dashboard,<?php echo $_SESSION['userName']?></h1>
<li>items</li>
</body>

</html>
<?php
show_source(__FILE__);
?>