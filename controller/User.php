<?php
require_once('../model/databaseConfig.php');
class User extends DatabaseConnect
{
   //This function logs in a user.
    private $userName;
    private $userPassword;
    public function userLogin($userName, $userPassword)
    {  
         session_start();
        $_SESSION['adminText']="Dashboard";
        $_SESSION['logoutText']="Logout";
     $sqlStatement="SELECT * FROM `my-classified-members` WHERE id=1 ";
        $prepareSQL=$this->prepare($sqlStatement);
        $prepareSQL->execute();
        $sqlData=$prepareSQL->fetch();
        $prepareSQL->closeCursor();
        $_SESSION['userName']=$sqlData['username'];
        $_SESSION['userPassword']=$sqlData['password'];
         if (isset($sqlData['username'])&&  isset($sqlData['password'])) {
          
            header('Location: https://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'].'./../../view/adminArea.php');
         }
        show_source(__FILE__);
    }
    //This function logs out of the  website
    function logoutSession(){
session_start();
//   unset($_SESSION['logoutText']);
//   unset($_SESSION['adminText']);
  session_destroy();
//   if (!isset($_SESSION['userName'])) {
   header('Location: ../index.php');
    
// }

}


}