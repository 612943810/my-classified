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
    public function modifyCategoriesOutput($modifyButton,$cancelButton, $title, $descriptionItem)
    {$this->category->modifyCategories($modifyButton,$title,$descriptionItem);
     }
    }


