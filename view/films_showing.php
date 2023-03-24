<html> 
<body>
<head> 
<title> Malden Hollywood Cinema - Now Screening </title>
<link rel="stylesheet" type="text/css" href="../css/film_style.css">
</head> 

<div class="header"> 
    <img src="../images/MHC_logo.jpg" alt="Malden Hollywood Cinema Logo" height="100" width="100" /> 
</div> 
<div class="topnav"> 
    <a href="../controller/home.php"> HOME </a> 
    <a href="../controller/nowScreening.php"> NOW SCREENING </a> 
    <a href="../controller/event.php"> EVENTS </a> 
    <a href="../controller/giftCard.php"> GIFT CARDS </a> 
    <a href="../controller/ChooseAFilm.php"> BOOK NOW </a> 
</div> 
<h1> Films </h1> 
<form class="searchFilms" action="../controller/nowScreening.php" method="GET">
<input type="search" placeholder="Search" name="searchMovies" id="searchfn" /> 
<input type="submit" value="Search"/>
</form>
<form>
<div class="card"> 
<?php foreach ($films as $oneMovie): ?>
    <h1  class="filmTitle"><?= $oneMovie->NAME ?></h1> 
    <p><?= $oneMovie->RATING ?> </p> 
    <p><?= $oneMovie->DURATION ?></p> 
    <p><?= $oneMovie->GENRE ?></p> 
    <img src=<?= $oneMovie->IMG_URL ?>  width="200" height="300"/> </br>
    <button class="filmtrail"> TRAILER </button>
    <?php endforeach ?> 
    </div> 
 </form>

<div class="footer"> 
    <p> Copyright 2023 Malden Hollywood Cinema </p> 
    <img src="../images/icons8-facebook-48.png" alt="facebook" /> 
    <img src="../images/icons8-instagram-48.png" alt="instagram" /> 
    <img src="../images/icons8-linkedin-48.png" alt="linkedin" /> 

</div> 





</body>
</html>
    

