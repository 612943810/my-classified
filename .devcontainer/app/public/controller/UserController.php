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
      $sqlStatement="SELECT * FROM `my-classified-members` WHERE id=1";
      $prepareSQL=$this->pdo->prepare($sqlStatement);
      $prepareSQL->execute();
      $sqlData=$prepareSQL->fetch();
      $prepareSQL->closeCursor();
      $_SESSION['userName']=$sqlData['username'];
      $_SESSION['userPassword']=$sqlData['password'];
      if (isset($sqlData['username']) && isset($sqlData['password'])) {
          header('Location: /admin');
          exit();
      }
    }
    function logoutSession(){
      session_destroy();
      header('Location: ../index.php');
      exit();
    }
}