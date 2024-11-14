<?php  
session_start();
require_once(__DIR__.'/../model/categoryDatabase.php');
class CategoryController extends categoryDatabase
{
    private $categoryTitle;
    private $categoryDescription;
//This function adds a category.
    public function addCategoriesOutput($submitButton,$cancelButton, $title, $descriptionItem)
    {
      
        if (isset($_POST[$submitButton])) {
            $_SESSION['categoryTitle'] = $_POST[$title];
            $_SESSION['categoryDescription'] = $_POST[$descriptionItem];
            print('<p class="alert alert-success" role="alert">Sucesss<p>');
            $categoryOperations=new CategoryDatabase();
            $categoryOperations->addCategories($title,$descriptionItem);
        }
    }
    //This function modifies a category.
    public function modifyCategoriesOutput($modifyButton,$cancelButton, $title, $descriptionItem)
    {
 
        if (isset($_POST[$modifyButton])) {
            $_SESSION['categoryTitle'] = $_POST[$title];
            $_SESSION['categoryDescription'] = $_POST[$descriptionItem];
            header('Location: https://' . $_SERVER['SERVER_NAME'] . '/comp1230/assignments/assignment2/view/viewCategory.php');
            $categoryOperations=new CategoryDatabase();
            $categoryOperations->modifyCategories($modifyButton, $title, $descriptionItem);
        }else if(isset($_POST[$cancelButton])){
            
            header('Location: https://' . $_SERVER['SERVER_NAME'] . '/comp1230/assignments/assignment2/view/viewCategory.php');
      show_source(__FILE__); 
     }
    }
}

