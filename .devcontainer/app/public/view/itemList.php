<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/comp1230/assignments/assignment2/model/itemDatabase.php');
$itemList=new itemsDatabase();
require_once('./navigation.php');

$itemList->displayItemsResults();
?>