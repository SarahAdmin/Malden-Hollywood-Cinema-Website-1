<html> 
<body>
    <link rel="stylesheet" type="text/css" href="../view/style1.css"> 
    <link rel="stylesheet" type="text/css" href="../css/registerForm.css">
    <script src="../javascript/messageOne.js"></script>
<head> 
<title> Malden Hollywood Cinema - Home Page </title>
</head> 

<div class="header"> 
    <img src="../images/MHC_logo.jpg" alt="Malden Hollywood Cinema Logo" height="100" width="100"  /> 
</div> 
<div class="topnav"> 
    <a href="../controller/home.php"> HOME </a> 
    <a href="../controller/nowScreening.php"> NOW SCREENING </a> 
    <a href="../controller/event.php"> EVENTS </a> 
    <a href="../controller/giftCard.php"> GIFT CARDS </a> 
    <a href="../controller/ChooseAFilm.php"> BOOK NOW </a> 
</div> 

<h1> Register for Membership </h1> 

<form action="../controller/registerCompleted.php" method="post">
<label class="register_member"> Membership_ID </label> 
<input type="text"  name="memberid" required /> 
</br>
<label class="register_member"> First Name </label> 
<input type="text" placeholder="First Name" name="fnOne" required /> 
</br>
<label class="register_member"> Last Name </label> 
<input type="text" placeholder="Last Name" name="lnOne" required /> 
</br>
<label class="register_member"> Email Address </label> 
<input type="text" placeholder="Email" name="email"  required /> 
</br>
<label class="register_member"> Phone Number </label> 
<input type="text" placeholder="01234 5678910" name="phoneno" required /> 
</br>
<button class="submit" onclick="RegisteredCompleted()"> SUBMIT </button>
</form>


<div class="footer"> 
    <p> Copyright 2023 Malden Hollywood Cinema </p> 
    <img src="../images/icons8-facebook-48.png" alt="facebook" /> 
    <img src="../images/icons8-instagram-48.png" alt="instagram" /> 
    <img src="../images/icons8-linkedin-48.png" alt="linkedin" /> 

</div> 




</body>
</html>
    