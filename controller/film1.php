<?php 
require_once("../view/magic_mikes_view.php"); 
require_once("../model/film.php"); 
require_once("../model/DataAccess.php"); 

$highlightedTime = 0; 
if(isset($_REQUEST["highlightTime"])) {
    $highlightedTime = $_REQUEST["highlightTime"];
}










?>