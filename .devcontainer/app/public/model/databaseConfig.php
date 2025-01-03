<?php
trait PDOTrait {
    protected $pdo;

    public function connectToDatabase(
        $dsn = 'mysql:host=db;dbname=my-classified;', 
        $username = 'root', 
        $password = 'mysqlcee'
    ) {
        try {
            $this->pdo = new PDO($dsn, $username, $password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }
}