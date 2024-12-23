<?php
require_once(__DIR__. '/../model/databaseConfig.php');


class Category extends DatabaseConnect{
 
  private $totalQuery;

  public function addCategories($name, $description) {
    try {
      // This function runs the add queries.
      $sqlStatments = "INSERT INTO `my-classified-category`(`name`, `description`) VALUES ( :categoryName, :categoryDescription)";
      $sqlQuery = $this->prepare($sqlStatments);
      
      $sqlQuery->bindValue(':categoryName', $name);
      $sqlQuery->bindValue(':categoryDescription', $description);
      
      if ($sqlQuery->execute()) {
        echo "Category added successfully.";
      } else {
        $errorInfo = $sqlQuery->errorInfo();
        echo "Failed to add category. Error: " . $errorInfo[2];
      }
      
      $sqlQuery->closeCursor();
    } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
  }

        //This function runs the modify queries.
        public function modifyCategories($submitModify,$title,$description){ 
          if(isset($_POST[$title])&&isset($_POST[$description])){
            $sqlStatments ="SELECT * FROM `my-classified-category`";
            $sqlQuery = $this->prepare($sqlStatments);
            $sqlQuery->execute();
            $sqlQuery->closeCursor();
            $_SESSION['id']=$_GET['id'];
              $_SESSION['modifyTitle'] = $_POST[$title];
        $_SESSION['modifyDescription'] = $_POST[$description];
           $sqlStatments ="UPDATE `my-classified-category` SET `name`=:categoryTitle,`description`=:categoryDescription WHERE `id`=:id";
            $sqlQuery = $this->prepare($sqlStatments);
            $sqlQuery->bindValue(':id', $_SESSION['id']);
            $sqlQuery->bindValue(':categoryTitle', $_SESSION['modifyTitle']);
            $sqlQuery->bindValue(':categoryDescription', $_SESSION['modifyDescription']);
            $sqlQuery->execute();
            $sqlQuery->closeCursor();
      }
   }
   //This function displays all the function records.
   public function displayCategoryResults()
   {
       $sqlStatments = "SELECT * FROM `my-classified-category`";
       $sqlQuery = $this->prepare($sqlStatments);
       $sqlQuery->execute();
       $totalQuery=$sqlQuery->fetch();
          while ($totalQuery!=null) {
          // $totalCount++;
          // if ($_SERVER['REQUEST_URI']=="/comp1230/assignments/assignment2/view/viewCategory.php") {
               echo"<tr>";
               print('<td>'.$totalQuery['name']."</td>");
               print('<td>'.$totalQuery['description']."</td>");
               print('<td>To be contunie</td>');
               print('<td><button class="btn btn-warning"><a href=modifyCategories.php?id='.$totalQuery["id"].'>Modify</a></button></td>');
               $totalQuery=$sqlQuery->fetch();  
              
          } 
           $sqlQuery->closeCursor();
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
