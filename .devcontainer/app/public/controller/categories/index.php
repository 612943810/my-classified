<?php
$action=filter_input(INPUT_POST,'action');
if($action==null){
    $action='view-category';
}
?>