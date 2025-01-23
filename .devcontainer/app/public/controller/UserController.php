<?php
require_once(__DIR__.'/../model/databaseConfig.php');
class User 
{
   use PDOTrait;
   public function __construct() {
      $this->connectToDatabase();
  }
    private $userName;
    private $userPassword;
    public function userLogin($userName, $userPassword)
    {  
      $_SESSION['adminText']="Dashboard";
      $_SESSION['logoutText']="Logout";
      $sqlStatement="SELECT * FROM `my-classified-members` WHERE  username=:username AND password=:password"; 
      $prepareSQL=$this->pdo->prepare($sqlStatement);
      $prepareSQL->bindParam(':username', $userName);
      $prepareSQL->bindParam(':password', $userPassword);
      $prepareSQL->execute();
      $sqlData=$prepareSQL->fetch();
      $prepareSQL->closeCursor();
      if ($sqlData) {
          $_SESSION['userName']=$sqlData['username'];
          $_SESSION['userPassword']=$sqlData['password'];
          $_SESSION['loggedIn'] = true;
          header('Location: /admin');
          exit();
      }
    }
    function logoutSession(){
      session_start();
      $_SESSION = array();
      session_destroy();
      header('Location: /');
      exit();
    }
}