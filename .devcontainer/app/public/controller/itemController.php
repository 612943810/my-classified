<?php
require_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'comp1230' . DIRECTORY_SEPARATOR . 'assignments' . DIRECTORY_SEPARATOR . 'assignment2' . DIRECTORY_SEPARATOR . 'model' . DIRECTORY_SEPARATOR . 'itemDatabase.php');
class ItemController extends DatabaseConnect
{
    private $categoryTitle;
    private $categoryDescription;

    public function addItemsOutput($categoryDropdown, $submitButton, $title, $descriptionItem, $priceEntry, $imageInput)
    {
        session_start();
        if (isset($_POST[$submitButton])) {
            $_SESSION['imageEntry'] = file_get_contents($_FILES[$imageInput]['name']);
            $_SESSION['itemTitle'] = $_POST[$title];
            $_SESSION['itemDescription'] = $_POST[$descriptionItem];
            $_SESSION['categoryDropdown'] = $_POST[$categoryDropdown];
            $_SESSION['priceInput'] = $_POST[$priceEntry];

            $categorySQLStatments = "SELECT `id` FROM my-classified-category WHERE `name`=:categoryID";
            $sqlQuery = $this->prepare($categorySQLStatments);
            $sqlQuery->bindValue(':categoryID', $_POST[$categoryDropdown]);
            $sqlQuery->execute();
            $categoryTotalQuery = $sqlQuery->fetch();
            $categoryOperations = new itemsDatabase();


            $categoryOperations->addItems($categoryTotalQuery['id']);


            header('Location: https://' . $_SERVER['SERVER_NAME'] . '/comp1230/assignments/assignment2/view/viewItems.php');
            print('<p class="alert alert-success" role="alert">Sucesss<p>');

            $sqlQuery->closeCursor();
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

                header('Location: https://' . $_SERVER['SERVER_NAME'] . '/comp1230/assignments/assignment2/view/viewItemsAdmin.php');
            }
            $categoryOperations = new itemsDatabase();
            $categoryOperations->modifyItems($modifyButton, $title, $descriptionItem, $_SESSION['imageEntry'], $priceItem);
        }
        show_source(__FILE__);
    }
}
