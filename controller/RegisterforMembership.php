<?php


require_once("../model/member.php"); 
require_once("../model/DataAccess.php");


$status = false; 

if(isset($_REQUEST["fnOne"]))
{   
    $id = $_REQUEST["memberid"];
    $fnOne = $_REQUEST["fnOne"]; 
    $lnOne = $_REQUEST["lnOne"]; 
    $email = $_REQUEST["email"]; 
    $phoneno = $_REQUEST["phoneno"]; 


    $member = new Member(); 
    $member->memberid = htmlentities($id);
    $member->firstname = htmlentities($fnOne); 
    $member->lastname = htmlentities($lnOne); 
    $member->email = htmlentities($email); 
    $member->phoneno = htmlentities($phoneno);
    
   addMember($member); 
   $status = "Welcome $fnOne to Membership Club";


}

require_once("../view/register.php"); 


?>