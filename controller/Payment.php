<?php 

require_once("../view/payment_view.php"); 
require_once("../model/payment.php");
require_once("../model/DataAccess.php"); 

$status = false; 

if(isset($_REQUEST["cname"]))
{ 
    $cardtype = $_REQUEST["cardType"]; 
    $cardholdername = $_REQUEST["cname"]; 
    $cardnumber = $_REQUEST["cardno"]; 
    $expirydate =  $_REQUEST["expirydate"]; 
    $cvv = $_REQUEST["cvv"];
}



$paymentInfo = new Payment(); 
$paymentInfo->cardtype = htmlentities($cardtype); 
$paymentInfo->cardholdername = htmlentities($cardholdername); 
$paymentInfo->cardno = htmlentities($cardnumber); 
$paymentInfo->expirydate = htmlentities($expirydate); 
$paymentInfo->cvv = htmlentities($cvv);

$purchasePayment = addPayment(); 
$status = "$cname is accepted"; 


?>