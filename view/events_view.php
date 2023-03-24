
<html> 
<body>
<head> 
<title> Malden Hollywood Cinema - Events </title>
<link rel="stylesheet" type="text/css" href="../view/style1.css"> 
<link rel="stylesheet" type="text/css" href="../css/style3.css">
</head> 

<div class="header"> 
    <img src="../images/MHC_logo.jpg" alt="Malden Hollywood Cinema Logo" height="100" width="100"/> 
</div> 
<div class="topnav"> 
    <a href="../controller/home.php"> HOME </a> 
    <a href="../controller/nowScreening.php"> NOW SCREENING </a> 
    <a href="../controller/event.php"> EVENTS </a> 
    <a href="../controller/giftCard.php"> GIFT CARDS </a> 
    <a href="../controller/ChooseAFilm.php""> BOOK NOW </a> 
</div> 
<h1 class="eventsHeading"> Events </h1>
<div class="row"> 
    <div class="column" style="background-color:lavender;"> 
   <h1 class="info1"> About Events </h1>  
   <p class="info1"> Malden Hollywood Cinema provides thrilling private events for everyone. You can hire each room for your events such as gaming; conferences; private cinema 
   and services </p>  
   <p class="info1"> Also, we offers Gaming events as part of entertainment and it opens for everyone who interested in games such as 
    race-karting. </p>
   <img src="../images/Calendar_star_icon-1.jpg" width="200" height="200" />
   </div>
 <div class="column" style="background-color:snow;"> 
    <h1> Types </h1> 
    <?php foreach ($ExcitingEvents as $ManyEvents): ?> 
        <h2> <b> <?= $ManyEvents->EVENT_ID ?> </b> </h2> 
        <h2> <u> <?= $ManyEvents->EVENT_NAME ?> </u> </h2> 
        <h2><?= $ManyEvents->DESCRIPTION ?></h2> 
        <?php endforeach ?>
 
</div> 
</div> 

<div class="footer"> 
    <p> Copyright 2023 Malden Hollywood Cinema </p> 
    <img src="../images/icons8-facebook-48.png" alt="facebook" /> 
    <img src="../images/icons8-instagram-48.png" alt="instagram" /> 
    <img src="../images/icons8-linkedin-48.png" alt="linkedin" /> 

</div> 




</body>
</html>