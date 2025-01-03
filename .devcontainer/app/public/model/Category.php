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
        public function modifyCategories($submitModify,$title,$description){ 
          if(isset($_POST[$title])&&isset($_POST[$description])){
            $sqlStatments ="SELECT * FROM my-classified-category";
            $sqlQuery = $this->pdo->prepare($sqlStatments);
            $sqlQuery->execute();
            $sqlQuery->closeCursor();
            $mainId=$_GET['id'];
              $title = $_POST[$title];
        $description = $_POST[$description];
           $sqlStatments ="UPDATE `my-classified-category` SET name=:categoryTitle,description=:categoryDescription WHERE id=:id";
            $sqlQuery = $this->pdo->prepare($sqlStatments);
            $sqlQuery->bindValue(':id', $mainId);
            $sqlQuery->bindValue(':categoryTitle', $title);
            $sqlQuery->bindValue(':categoryDescription', $description);
            $sqlQuery->execute();
            $sqlQuery->closeCursor();
      }
   }
   //This function displays all the function records.
   public function displayCategoryResults()
   {
       $sqlStatments = "SELECT * FROM `my-classified-category`";
       $sqlQuery = $this->pdo->prepare($sqlStatments);
       $sqlQuery->execute();
       $totalQuery=$sqlQuery->fetch();
          while ($totalQuery!=null) {
          // $totalCount++;
          // if ($_SERVER['REQUEST_URI']=="/comp1230/assignments/assignment2/view/viewCategory.php") {
               echo"<tr>";
               print('<td>'.$totalQuery['name']."</td>");
               print('<td>'.$totalQuery['description']."</td>");
               print('<td>To be contunie</td>');
               print('<td><button class="btn btn-warning"><a href=categories/modify?id='.$totalQuery["id"].'>Modify</a></button></td>');
               $totalQuery=$sqlQuery->fetch();  
          } 
           $sqlQuery->closeCursor();
    }

  // This function retrieves a category by its ID.
  public function getCategoriesById($id) {
      $sqlStatments = "SELECT * FROM `my-classified-category` WHERE id = :id";
      $sqlQuery = $this->pdo->prepare($sqlStatments);
      $sqlQuery->bindValue(':id', $id);
      $sqlQuery->execute();
      $category = $sqlQuery->fetch();
      $sqlQuery->closeCursor();
      return $category;
  }
                        
              
  /**
   * This gets the value of totalQuery
   */ 
  public function getTotalQuery()
  {
    return $this->totalQuery;
  }

  /**
   * Set the valueThis gets the value of totalQuery
  
   */ 
  public function setTotalQuery($totalQuery)
  {
    $this->totalQuery = $totalQuery;

    return $this;
  }
       }