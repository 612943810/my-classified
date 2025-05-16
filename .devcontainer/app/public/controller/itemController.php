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
        session_start();
        if (isset($_POST[$itemId]) && isset($_POST[$itemTitle]) && isset($_POST[$itemDescription]) && isset($_FILES[$imageUpload]) && isset($_POST[$itemPrice])) {
            $_SESSION['itemId'] = $_POST[$itemId];
            $_SESSION['itemTitle'] = $_POST[$itemTitle];
            $_SESSION['categoryDescription'] = $_POST[$itemDescription];
            $_SESSION['imageUpload'] = $_FILES[$imageUpload]['name'];
            $_SESSION['priceInput'] = $_POST[$itemPrice];

            header('Location: https://' . __DIR__ . '/../../view/admin/items/viewItems.php');
        } else
    {
    
        }

    }
    public function modifyItemOutput($modifyButton, $title, $descriptionItem, $imageInput, $priceItem)
    {
        session_start();

        if (isset($_POST[$modifyButton])) {
            if (isset($_POST[$modifyButton]) || (isset($_FILES[$imageInput]))) {
                $_SESSION['itemTitle'] = $_POST[$title];
                $_SESSION['itemDescription'] = $_POST[$descriptionItem];
                $_SESSION['imageEntry'] = $_FILES[$imageInput]['name'];
                $_SESSION['itemPrice'] = $_POST[$priceItem];

                header('Location: https://' . __DIR__ . '/../../view/viewItems');
            }
            $categoryOperations = new Item();
            $categoryOperations->modifyItems($modifyButton, $title, $descriptionItem, $_SESSION['imageEntry'], $priceItem);
        }
        show_source(__FILE__);
    }
    public function  createSideMenu(){
        $categoryController = new Category();
        $categoryData=$categoryController->getCategoryName();
        require_once(__DIR__ . '/../view/admin/items/viewItems.php');
        return $categoryData;
    }
}
