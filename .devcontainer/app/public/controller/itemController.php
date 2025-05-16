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

    public function addItems($itemId, $itemTitle, $itemDescription, $imageUpload, $itemPrice, $categoryID)
    {
       if (isset($_POST[$itemId]) && isset($_POST[$itemTitle]) && isset($_POST[$itemDescription]) && isset($_FILES[$imageUpload]) && isset($_POST[$itemPrice])) {
            $this->item->addItems($itemId, $itemTitle, $itemDescription, $_FILES[$imageUpload]['name'], $itemPrice, $categoryID);
        }
    }
    public function editItems($modifyButton, $title, $descriptionItem, $imageInput, $priceItem)
    {
        if (isset($_POST[$title]) && isset($_POST[$descriptionItem]) && isset($_FILES[$imageInput]) && isset($_POST[$priceItem])) {
            $this->item->modifyItems($modifyButton, $title, $descriptionItem, $_FILES[$imageInput]['name'], $priceItem);
        }
    }
    public function  createSideMenu(){
        $categoryController = new Category();
        $categoryData=$categoryController->getCategoryName();
        require_once(__DIR__ . '/../view/admin/items/viewItems.php');
        return $categoryData;
    }
}
