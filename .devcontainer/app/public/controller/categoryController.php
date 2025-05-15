<?php  
require_once(__DIR__.'/../model/Category.php');
class CategoryController extends Category
{
 private  $category;
  public function __construct()
  {
    $this->category=new Category();
  }
//This function adds a category.
public function addCategories($name, $description) {
   $this->category->addCategories($name, $description);
  }
    //This function modifies a category.
    public function editCategories($title, $descriptionItem)
    {
    if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['description'])) {
            $this->category->modifyCategories($title, $descriptionItem);
        }
    }
    
    public function viewCategories() {
      $categoryModel= new Category();
      $categories = $categoryModel->getAllCategories();
      require_once(__DIR__.'/../view/admin/categories/viewCategory.php');
        return $categories;
    }
    //This function retrieves a category by its ID.
    public function deleteCategory($id) {
        $this->category->deleteCategory($id);
    }
}


