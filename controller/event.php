<?php 

require_once("../model/event.php"); 
require_once("../model/DataAccess.php");



$ExcitingEvents = getAllEvents(); 


require_once("../view/events_view.php"); 





?>