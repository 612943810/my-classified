<?php
//This is the item list view for visitors. 
require_once($_SERVER['DOCUMENT_ROOT'] . '/comp1230/assignments/assignment2/model/itemDatabase.php');
$itemList=new itemsDatabase();
require_once('./navigation.php');
navigationBar();
$itemList->displayItemsResults();
show_source(__FILE__);
?>