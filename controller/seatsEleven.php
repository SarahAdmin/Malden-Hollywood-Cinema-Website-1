<?php

require_once("../model/seat.php");
require_once("../model/DataAccess.php");


$PickASeat = getAllSeats();

$highlightSeat = 0; 
if(isset($_REQUEST["seatId"])) {
    $highlightSeat = $_REQUEST["seatId"];
}



require_once("../view/seats11.php"); 



?>