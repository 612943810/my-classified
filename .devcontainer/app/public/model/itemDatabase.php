<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/comp1230/assignments/assignment2/model/databaseConfig.php');


class itemsDatabase extends DatabaseConnect
{
    private $totalQuery;
//This function adds the items.
    public function addItems($categoryID){

        $itemSQLStatments = "INSERT INTO `assignment2_items`(`id`, `title`, `description`, `image`,`price`, `cat_id`) VALUES (NULL,:categoryTitle,:categoryDescription,:imageUpload,:itemPrice,:categoryID)";
        $sqlQuery = $this->prepare($itemSQLStatments);
        $sqlQuery->bindValue(':categoryTitle', $_SESSION['itemTitle']);
        $sqlQuery->bindValue(':categoryDescription',$_SESSION['itemDescription']);   
         $sqlQuery->bindValue(':imageUpload',$_SESSION['imageEntry']);        
         $sqlQuery->bindValue(':itemPrice', $_SESSION['priceInput']);
        $sqlQuery->bindValue(':categoryID',$categoryID);

    
        $sqlQuery->execute();
        $sqlQuery->closeCursor();
      }
      //This function edits the items.
        public function modifyItems($submitModify,$title,$description,$imageInput,$priceItem){ 
          // if(isset($_POST[$title])&&isset($_POST[$description])){
            $sqlStatments ="SELECT * FROM `assignment2_items`";
            $sqlQuery = $this->prepare($sqlStatments);
            $sqlQuery->execute();
            $totalQuery=$sqlQuery->fetch();
            $sqlQuery->closeCursor();
            $_SESSION['idModify']=$_GET['idModify'];
            if(isset($_FILES[$imageInput])){
              $_SESSION['imageModify']=$_FILES[$imageInput]['name']; 
            $_SESSION['modifyTitle'] = $_POST[$title];
            $_SESSION['itemDescriptionModify'] = $_POST[$description];
            $_SESSION['itemPriceModify'] = $_POST[$priceItem];
        // $_SESSION['itemsDescription'] = $_POST[$description];
        // $_SESSION['priceInput'] = $_POST[$description];//  
           $sqlStatments ="UPDATE `assignment2_items` SET `id`=Null,`title`=:itemTitle,`description`=:categoryDescription,`image`=:imageUpload,`price`=:itemPrice,`cat_id`=NULL,`status`=NULL,`front_page`=NULL WHERE`id`= 1";
          $sqlQuery = $this->prepare($sqlStatments);
            $sqlQuery->bindValue(':id', $_SESSION['idModify']);
            $sqlQuery->bindValue(':itemTitle', $_SESSION['modifyTitle']);
            $sqlQuery->bindValue(':categoryDescription',$_SESSION['itemDescriptionModify']);   
             $sqlQuery->bindValue(':imageUpload',$_SESSION['imageModify']);        
             $sqlQuery->bindValue(':itemPrice', $_SESSION['itemPriceModify']);
            $sqlQuery->execute();
            $sqlQuery->closeCursor();
        
            }
                
          
      // }
     
   }
   //This function displays the items 
   public function displayItemsResults()
   {

       $sqlStatments = "SELECT * FROM assignment2_items";
       $sqlQuery = $this->prepare($sqlStatments);
      //  $sqlQuery->bindValue(':idNumber',$_GET['id']);
       $sqlQuery->execute();
       $totalQuery=$sqlQuery->fetch();
      $totalCount=0;
      while ($totalQuery!=null) {
          if (session_status()==PHP_SESSION_ACTIVE) {
              while ($totalQuery) {
                  print('<article class=" col-9">');
                  print("<h1>{$totalQuery['title']}</h1>");
                  print("<p>{$totalQuery['description']}</p>");
                  print("<p>{$totalQuery['price']}</p>");
                  echo('<img src="data:image/jpeg;base64,'. base64_encode($totalQuery['image']).'" height="400" width="200"/>');
                  print('<button class="btn btn-warning"><a href=modifyItems.php?idModify='.$totalQuery["id"].'>Modify</a></button>');
                  print('<button class="btn btn-danger"><a href=modifyCategories.php?id='.$totalQuery["id"].'>Delete</a></button>');
                  print('</article>');
                  $totalQuery=$sqlQuery->fetch();
              }
          } elseif (session_status()==PHP_SESSION_NONE) {
              while ($totalQuery) {
                  print('<article class=" col-9">');
                  print("<h1>{$totalQuery['title']}</h1>");
                  print("<p>{$totalQuery['description']}</p>");
                  print("<p>{$totalQuery['price']}</p>");
                  echo("<td>");
                  echo('<img src="data:image;base64,'. base64_encode($totalQuery['image']).'" height="400" width="200"/>');
                  echo("</td>");
                  print('</article>');
                  $totalQuery=$sqlQuery->fetch();
              }
          }
      }
               $sqlQuery->closeCursor();
                     
                  } 
              
      

  /**
   * Get the value of totalQuery
   */ 
  public function getTotalQuery()
  {
    return $this->totalQuery;
  }

  /**
   * Set the value of totalQuery
   *
   * @return  self
   */ 
  public function setTotalQuery($totalQuery)
  {
    $this->totalQuery = $totalQuery;

    return $this;
  }
       }
?>