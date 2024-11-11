<?php
class DatabaseConnect extends PDO{
    private $databaseUserName,$databaseUserPassword;

    //This function does database configuration 
    public function __construct($pdoDSN='mysql:host=db;dbname=my-classified;',$databaseUserName = "root",$databaseUserPassword = "mysqlcee")
{ 
    parent::__construct($pdoDSN,$databaseUserName,$databaseUserPassword);  
    $this->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}

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

