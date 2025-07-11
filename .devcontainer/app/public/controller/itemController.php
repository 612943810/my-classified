<?php  
require_once(__DIR__. '/../model/Item.php');
require_once(__DIR__. '/../model/Category.php');

class ItemController extends Item{
    use PDOTrait;
    private $item;
public function __construct() {
   $this->item=new Item();
}
    private $categoryTitle;
    private $categoryDescription;

    public function addItems( $itemTitle, $itemDescription, $imageUpload, $itemPrice, $categoryID)
    {
      $imageContent = null;
     
      if (isset($_FILES[$imageUpload]) && $_FILES[$imageUpload]['error'] === UPLOAD_ERR_OK) {
        $imageContent = file_get_contents($_FILES[$imageUpload]['tmp_name']);
      }

      $this->item->addItems($itemTitle, $itemDescription, $imageContent, $itemPrice, $categoryID);
    }
     public function editItems($modifyButton, $title, $descriptionItem, $imageInput, $priceItem)
    {
    $this->item->modifyItems($modifyButton, $title, $descriptionItem, $_FILES[$imageInput]['name'], $priceItem);

    }
    public function listItems()
    {   
        $itemModel = new Item();
        $items = $itemModel->displayItemsResults();

        $categoryModel = new Category();
        $categoryData = $categoryModel->getCategoryName();

        require_once(__DIR__ . '/../view/admin/items/viewItems.php');
    }
}
