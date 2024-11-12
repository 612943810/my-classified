<?php
//This is the item list view for visitors. 
session_start();
require_once($_SERVER['DOCUMENT_ROOT'] . '/comp1230/assignments/assignment2/model/itemDatabase.php');
$itemList=new itemsDatabase();
require_once('./navigation.php');

$itemList->displayItemsResults();
?>