<?php

ini_set('display errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL); 

$db_name = "db_k2024417";
$db_user = "k2024417";
$db_password = "pooyaiji"; 

$pdo = new PDO("mysql:host=localhost;dbname=$db_name",$db_user,$db_password); 
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

function getAllFilms() { 
    global $pdo; 
    $filmstatement = $pdo->prepare('SELECT * FROM MHC_FILM'); 
    $filmstatement->execute();
    $resultOne = $filmstatement->fetchAll(PDO::FETCH_CLASS, 'Film');
    return $resultOne;
}

function getAllEvents() {
    global $pdo;
    $eventstatement = $pdo->prepare('SELECT * FROM MHC_EVENT');
    $eventstatement->execute();
    $resultTwo = $eventstatement->fetchAll(PDO::FETCH_CLASS, 'Event');
    return $resultTwo;
}

function getOnefilmName($searchFilmName) {
    global $pdo;
    $onefilmstatement = $pdo->prepare('SELECT * FROM MHC_FILM WHERE NAME =?');
    $onefilmstatement->execute();
    $oneresult = $onefilmstatement->fetchAll(PDO::FETCH_CLASS, 'Film');
    return $oneresult;
}

function addMember($newMember) {
    global $pdo;
    $memberstatement = $pdo->prepare("INSERT INTO MHC_MEMBER(MEMBER_ID,FIRST_NAME,LAST_NAME,EMAIL_ADDRESS,
    PHONE_NO) VALUES(?,?,?,?,?)");
    $memberstatement->execute([$newMember->MEMBER_ID,$newMember->FIRST_NAME, $newMember->LAST_NAME, $newMember->EMAIL_ADDRESS,
$newMember->PHONE_NO]);
    
}

function addPayment($payinfo) {
    global $pdo;
    $paystatement = $pdo->prepare("INSERT INTO MHC_PAYMENT(PAYMENT_ID,CARD_TYPE,CARDHOLDER_NAME,CARD_NUMBER,EXPIRY_DATE,CVV) VALUES (?,?,?,?,?,?)");
    $paystatement->execute([$payinfo->CARD_TYPE, $payinfo->CARDHOLDER_NAME, $payinfo->CARD_NUMBER, $payinfo->EXPIRY_DATE, $payinfo->CVV]); 
}


function getAllSeats() {
    global $pdo;
    $seatstatement = $pdo->prepare("SELECT SEAT_CODE FROM MHC_SEAT ORDER BY SEAT_CODE ASC;");
    $seatstatement->execute();
    $resultThree = $seatstatement->fetchAll(PDO::FETCH_CLASS, 'Seat');
    return $resultThree;

}

function getFullTicket() {
    global $pdo; 
    $tickstatement = $pdo->prepare("SELECT * FROM MHC_TICKET");
    $tickstatement->execute(); 
    $tresult = $tickstatement->fetchAll(PDO::FETCH_CLASS,'Ticket');
    return $tresult;
}

function getFullRoom() { 
    global $pdo; 
    $roomstatement = $pdo->prepare("SELECT * FROM MHC_TICKET"); 
    $roomstatement->execute(); 
    $resultFour = $roomstatement->fetchAll(PDO::FETCH_CLASS,'Room'); 
    return $resultFour; 
}

function getFullReciept() { 
    global $pdo;
    $recstatement = $pdo->prepare("SELECT * FROM MHC_RECIEPT WHERE RECIEPT_ID=?");
    $recstatement->execute();
    $resultFive = $recstatement->fetch(PDO::FETCH_CLASS, 'Receipt');
    return $resultFive;
}



?>