<html>
<body> 
<head> 
<link rel="stylesheet" type="text/css" href="../css/filmDetails.css">
<title> Malden Hollywood Cinema - Creed III </title>
</head> 


<h1 class="titleHeading">  Creed III </h1> 

<img src="../images/creed3_poster.jpg" width="200" height="300"/>
</br>
<h2 class="timeHeading"> Times </h2> 
</br>
<a class="times2" href="" name="highlightTime" class="highlighter"> 10:00 </a> 
<a class="times2" href="" name="highlightTime" class="highlighter"> 14:20 </a> 
<a class="times2" href="" name="highlightTime" class="highlighter"> 18:50 </a> 
<a class="times2" href="" name="highlightTime" class="highlighter"> 23:30 </a> 


<h2 class="dateHeading"> Date </h2>  
</br>
<form action ="" >
<input type="date" name="DatePicker" id="DatePicker" required /> 
</form> 

<form class="quantityOfPeople">
<label for ="ChildQuantity"> Child £5.00</label> 
<select id="ChildQuantity" > 
    <option value="zero"> 0 </option> 
    <option value="one"> 1 </option>
    <option value="two"> 2 </option>
    <option value="three"> 3 </option>
    <option value="four"> 4 </option>
    <option value="five"> 5 </option>
    <option value="six"> 6 </option>
    <option value="seven"> 7 </option>
    <option value="eight"> 8 </option>
    <option value="nine"> 9 </option>
    <option value="ten"> 10 </option>

</select>
</form>
</br>

<form class="quantityOfPeople">
<label for ="AdultQuantity"> Adult £7.50</label> 
<select id="AdultdQuantity" > 
    <option value="zero"> 0 </option> 
    <option value="one"> 1 </option>
    <option value="two"> 2 </option>
    <option value="three"> 3 </option>
    <option value="four"> 4 </option>
    <option value="five"> 5 </option>
    <option value="six"> 6 </option>
    <option value="seven"> 7 </option>
    <option value="eight"> 8 </option>
    <option value="nine"> 9 </option>
    <option value="ten"> 10 </option>

</select>
<h2 style="color:snow" id="aprice", data-price="£7.50"> £7.50 </h2> 
<h2 style="color:snow"> Total: £<span id="total1"></span></h2> 
</form>
</form>
</br>

<form class="quantityOfPeople">
<label for ="StudentQuantity"> Student £6.00</label> 
<select id="StudentQuantity" > 
    <option value="zero"> 0 </option> 
    <option value="one"> 1 </option>
    <option value="two"> 2 </option>
    <option value="three"> 3 </option>
    <option value="four"> 4 </option>
    <option value="five"> 5 </option>
    <option value="six"> 6 </option>
    <option value="seven"> 7 </option>
    <option value="eight"> 8 </option>
    <option value="nine"> 9 </option>
    <option value="ten"> 10 </option>

</select>
<h2 style="color:snow" id="sprice", data-price="£6"> £6.00 </h2> 
<h2 style="color:snow"> Total: £<span id="total2"></span></h2> 
</form>
</br>

<form class="leftButton"  action="../controller/ChooseAFilm.php">
<button class="One" onclick="" > Back </button> 
</form>
<form class="rightButton" action="../controller/seatsNine.php">
<button class="Two" onclick=""> Next </button>
</form>
