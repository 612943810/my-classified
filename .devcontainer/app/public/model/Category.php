<?php
require_once(__DIR__. '/../model/databaseConfig.php');
class Category {
  use PDOTrait;
 private $totalQuery;
  public function __construct() {
      $this->connectToDatabase();
      
  }
  public function addCategories($name, $description) {
      // This function runs the add queries.
      $sqlStatments = "INSERT INTO `my-classified-category`(name, description) VALUES ( :categoryName, :categoryDescription)";
      $sqlQuery = $this->pdo->prepare($sqlStatments);
      $sqlQuery->bindValue(':categoryName', $name);
      $sqlQuery->bindValue(':categoryDescription', $description);
      $sqlQuery->execute();
      $sqlQuery->closeCursor();

  }
  //This function runs the modify queries.
        public function modifyCategories(){ 
          if(isset($_POST['name'])&&isset($_POST['description'])){
     
            $mainId=$_GET['id'];
              $name = $_POST['name'];
        $description = $_POST['description'];  
        $pdoInit=new PDO('mysql:host=db;dbname=my-classified',"root","mysqlcee");
          $sqlStatments ="UPDATE `my-classified-category` 
                         SET `name` = :name, `description` = :description WHERE `id` = :id";
                       
            $sqlQuery = $pdoInit->prepare($sqlStatments);
            $sqlQuery->bindValue(':id', $mainId);
            $sqlQuery->bindValue(':name', $name);
            $sqlQuery->bindValue(':description', $description);
          $sqlQuery->execute();
         $sqlQuery->closeCursor();
      } else {
          echo "Required fields are missing.";
      
      }
   }
   //This function displays all the function records.
    public function getAllCategories() {
      $sqlStatments = "SELECT * FROM `my-classified-category`";
      $sqlQuery = $this->pdo->prepare($sqlStatments);
      $sqlQuery->execute();
      $category = $sqlQuery->fetchAll();
      $sqlQuery->closeCursor();
      return $category;
  }
  // This function retrieves a category by its ID.
  public function getCategoriesById($id) {
      $sqlStatments = "SELECT * FROM `my-classified-category` WHERE id = :id";
      $sqlQuery = $this->pdo->prepare($sqlStatments);
      $sqlQuery->bindValue(':id', $id);
      $sqlQuery->execute();
      $category = $sqlQuery->fetch(PDO::FETCH_ASSOC);
      $sqlQuery->closeCursor();
      return $category;
  }
  public function getCategoryName() {
    $sqlStatments = "SELECT  name FROM `my-classified-category`";
    $sqlQuery = $this->pdo->prepare($sqlStatments);
    $sqlQuery->execute();
    $categoryName = $sqlQuery->fetchAll(PDO::FETCH_ASSOC);
    $sqlQuery->closeCursor();
    return $categoryName;
}
   public function deleteCategory($id) {
      // This function runs the delete queries.
      $sqlStatments = "DELETE FROM `my-classified-category` WHERE id = :id";
      $sqlQuery = $this->pdo->prepare($sqlStatments);
      $sqlQuery->bindValue(':id', $id);
      $sqlQuery->execute();
      $sqlQuery->closeCursor();                     
   }         
  public function getTotalQuery()
  {
    return $this->totalQuery;
  }

  public function setTotalQuery($totalQuery)
  {
    $this->totalQuery = $totalQuery;

    return $this;
  }
       }