<?php
class DatabaseConnect extends PDO{
    //This function does database configuration 
    public function __construct($pdoDSN="mysql:host=localhost;dbname=my-classified;",$databaseUserName = "root",$databaseUserPassword = "")
    //public function __construct($pdoDSN='mysql:host=127.0.0.1;dbname=my-classified;',$databaseUserName = "root",$databaseUserPassword = "mysql")
{ 
    parent::__construct($pdoDSN,$databaseUserName,$databaseUserPassword);  
    $this->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
private $databaseUserName,$databaseUserPassword;

    public function getDatabaseUserName()
    {
        return $this->databaseUserName;
    }

    public function setDatabaseUserName($databaseUserName)
    {
        $this->databaseUserName = $databaseUserName;

        return $this;
    }

    public function getDatabaseUserPassword()
    {
        return $this->databaseUserPassword;
    }


    public function setDatabaseUserPassword($databaseUserPassword)
    {
        $this->databaseUserPassword = $databaseUserPassword;

        return $this;
        show_source(__FILE__);
    }
    }

