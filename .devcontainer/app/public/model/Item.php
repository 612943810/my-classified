<?php
require_once(__DIR__ . '/../model/databaseConfig.php');


class Item
{
  private $totalQuery;
  use PDOTrait;
  public function __construct()
  {
    $this->connectToDatabase();
  }
  //This function adds the items.
  public function addItems($title, $description, $image, $price, $categoryID)
  {
 $itemSQLStatments = "INSERT INTO `myclassified_items`(`id`, `title`, `description`, `image`,`price`, `cat_id`) VALUES (NULL,:categoryTitle,:categoryDescription,:imageUpload,:itemPrice,:categoryID)";
    $sqlQuery = $this->pdo->prepare($itemSQLStatments);
    $sqlQuery->bindValue(':categoryTitle', $title);
    $sqlQuery->bindValue(':categoryDescription', $description);
    $sqlQuery->bindValue(':imageUpload', $image);
    $sqlQuery->bindValue(':itemPrice', $price);
    $sqlQuery->bindValue(':categoryID', $categoryID);
    $sqlQuery->execute();
    $sqlQuery->closeCursor();
  }
  //This function edits the items.
  public function modifyItems($submitModify, $title, $description, $imageInput, $priceItem)
  {
    // if(isset($_POST[$title])&&isset($_POST[$description])){
    $sqlStatments = "SELECT * FROM `assignment2_items`";
    $sqlQuery = $this->pdo->prepare($sqlStatments);
    $sqlQuery->execute();
    $totalQuery = $sqlQuery->fetch();
    $sqlQuery->closeCursor();
    $_SESSION['idModify'] = $_GET['idModify'];
    if (isset($_FILES[$imageInput])) {
      $_SESSION['imageModify'] = $_FILES[$imageInput]['name'];
      $_SESSION['modifyTitle'] = $_POST[$title];
      $_SESSION['itemDescriptionModify'] = $_POST[$description];
      $_SESSION['itemPriceModify'] = $_POST[$priceItem];
      // $_SESSION['itemsDescription'] = $_POST[$description];
      // $_SESSION['priceInput'] = $_POST[$description];//  
      $sqlStatments = "UPDATE `assignment2_items` SET `id`=Null,`title`=:itemTitle,`description`=:categoryDescription,`image`=:imageUpload,`price`=:itemPrice,`cat_id`=NULL,`status`=NULL,`front_page`=NULL WHERE`id`= 1";
      $sqlQuery = $this->pdo->prepare($sqlStatments);
      $sqlQuery->bindValue(':id', $_SESSION['idModify']);
      $sqlQuery->bindValue(':itemTitle', $_SESSION['modifyTitle']);
      $sqlQuery->bindValue(':categoryDescription', $_SESSION['itemDescriptionModify']);
      $sqlQuery->bindValue(':imageUpload', $_SESSION['imageModify']);
      $sqlQuery->bindValue(':itemPrice', $_SESSION['itemPriceModify']);
      $sqlQuery->execute();
      $sqlQuery->closeCursor();
    }


    // }

  }
  //This function displays the items 
  public function displayItemsResults()
  {
      $sqlStatments = "SELECT * FROM `my-classified_items`";
      $sqlQuery = $this->pdo->prepare($sqlStatments);
      $sqlQuery->execute();
      $item = $sqlQuery->fetchAll();
      $sqlQuery->closeCursor();
      return $item;
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
