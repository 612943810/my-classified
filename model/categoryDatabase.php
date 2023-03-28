<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/comp1230/assignments/assignment2/model/databaseConfig.php');


class categoryDatabase extends DatabaseConnect{
 
  private $totalQuery;

    public function addCategories()
    {
         //This function runs the add  queries.
            $sqlStatments = "INSERT INTO `my-classified-category`(`id`, `name`, `description`) VALUES (NULL,:categoryTitle,:categoryDescription)";
            $sqlQuery = $this->prepare($sqlStatments);
            $sqlQuery->bindValue(':categoryTitle', $_SESSION['categoryTitle']);
            $sqlQuery->bindValue(':categoryDescription', $_SESSION['categoryDescription']);
            $sqlQuery->execute();
            
            $sqlQuery->closeCursor();
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
       $sqlStatments = "SELECT * FROM my-classified-category";
       $sqlQuery = $this->prepare($sqlStatments);
       $sqlQuery->execute();
       $totalQuery=$sqlQuery->fetch();
         
       $totalCount=0;
                  
       while ($totalQuery!=null) {
          // $totalCount++;
           if ($_SERVER['REQUEST_URI']=="/comp1230/assignments/assignment2/view/viewCategory.php") {
               echo"<tr>";
               print('<td>'.$totalQuery['name']."</td>");
               print('<td>'.$totalQuery['description']."</td>");
               print('<td>To be contunie</td>');
               print('<td><button class="btn btn-warning"><a href=modifyCategories.php?id='.$totalQuery["id"].'>Modify</a></button></td>');
               $totalQuery=$sqlQuery->fetch();
               echo "</tr>";
           } else  if ($_SERVER['REQUEST_URI']=="/comp1230/assignments/assignment2/view/viewCategoryVisitor.php") {
            echo"<tr>";
            print('<td>'.$totalQuery['name']."</td>");
            print('<td>'.$totalQuery['description']."</td>");
            $totalQuery=$sqlQuery->fetch();
            echo "</tr>";
        }else if ($_SERVER['REQUEST_URI']=="/comp1230/assignments/assignment2/view/viewItems.php") {
               while ($totalQuery!=null) {
                   print("<a class='border' href='itemListVisitor.php?id={$totalQuery['id']}'>{$totalQuery['name']}</a>");
                   $totalQuery=$sqlQuery->fetch();
               }
           }else if ($_SERVER['REQUEST_URI']=="/comp1230/assignments/assignment2/view/viewItemsAdmin.php") {
            while ($totalQuery!=null) {
                print("<a class='border' href='itemListAdmin.php?id={$totalQuery['id']}'>{$totalQuery['name']}</a>");
                $totalQuery=$sqlQuery->fetch();
            }
        }
            else if ($_SERVER['REQUEST_URI']=="/comp1230/assignments/assignment2/view/addItems.php") {
               {
                 while($totalQuery!=null){  
                       print("<option value='{$totalQuery['name']}'>{$totalQuery['name']}</option>");
                            $totalQuery=$sqlQuery->fetch();
              
                       }
                
                     }
                  $sqlQuery->closeCursor();
           }
       }
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
show_source(__FILE__);