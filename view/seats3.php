<html> 
<body> 
<head> 
<link rel="stylesheet" type="text/css" href="../css/seat_style.css">
<link rel="stylesheet" type="text/css" href="../css/seatsPosition.css">
<script src="../javascript/s_message.js"></script>
<title> Malden Hollywood Cinema - Seats  </title> 
</head> 

<h1 class="seatPositionHeading"> Choose a Seat </h1> 
<h3 class="headingOne"> <u> SCREEN </u> </h3>

<div class="seat-container">
<?php foreach ($PickASeat as $anySeat): ?>
<div><a href="../controller/seatsThree.php" onclick="seatSelected()" name="seatId"><?= $anySeat->SEAT_CODE ?></a></div>
<?php endforeach ?>

</div> 

</br> 
</br>

<h1 class="keyHeading"> <u> Keys </u> </h1>
</br>

<h2 class="selectedHeading"> SELECTED </h2>
<div class="selectedKey"></div> 
</br> 
<h2 class="soldHeading"> SOLD OUT </h2> 
<div class="soldKey"></div> 
<h2 class="reservedHeading"> RESERVED </h2> 
<div class="reservedKey"></div> 
</br>


<form class="leftButton" action="../controller/film3.php"> 
    <button class="One"> BACK </button>
</form> 

<form class="rightButton" action="../controller/YourOrder.php">
<button class="Two"> NEXT </button>
</form>






















</body> 
</html> 