<?php
session_start();    
require_once(__DIR__.'/model/itemDatabase.php');
$itemList=new itemsDatabase();
require_once('./navigation.php');

$itemList->displayItemsResults();
?>