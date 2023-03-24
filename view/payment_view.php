<html> 
    <body> 
        <head> 
            <title> Malden Hollywood Cinema - Payment  </title> 
</head> 
<link rel="stylesheet" type="text/css" href="../css/pay_style.css">

<h1 class="payHeading"> <u> Your Payment </u> </h1>
</br> 
</br>

<label for ="cardType"> Card Type: </label> 
</br>
<select id="cardType" name="cardType" required> 
    <option value="mastercard"> MasterCard </option> 
    <option value="visa"> Visa </option> 
    <option value="amex"> American Express </option> 
    <option value="stripe"> Stripe </option> 
</select> 
</br>
</br> 
</br>
<label for="cname"> Cardholder Name: </label>  
<input type="text" id="cname" name="cname"  required /> 
</br>
</br> 
</br>

<label for="cardno"> Card Number: </label> 
<input type="text" id="cardno" name="cardno" placeholder="1234 5678 9102 3450" required /> 
</br> 
</br> 
</br>


<label for="expirydate"> Expiry Date: </label> 
<select id="month" name="expirydate" required> 
    <option value="jan">  01 </option>
    <option value="feb">  02 </option>
    <option value="mar">  03 </option>
    <option value="apr">  04 </option>
    <option value="may">  05 </option>
    <option value="jun">  06 </option>
    <option value="jul">  07 </option>
    <option value="aug">  08 </option>
    <option value="sep">  09 </option>
    <option value="oct">  10 </option>
    <option value="nov">  11 </option>
    <option value="dec">  12 </option>
</select> 
<select id="year" name="expirydate" required> 
    <option value="23"> 2023 </option>
    <option value="24"> 2024 </option>
    <option value="25"> 2025 </option>
    <option value="26"> 2026 </option>
    <option value="27"> 2027 </option>
    <option value="28"> 2028 </option>
</select>
</br> 
</br> 
</br>

<label for="cvv"> CVV </label> 
<input type="text" id="cvv" name="cvv" placeholder="123" required /> 
</br> 
</br>
</br>
</br> 
</br>

<form class="leftButton" action="../controller/YourOrder.php">
<button class="backPage"> BACK </button> 
</form> 
<form class="rightButton" action="../controller/payment2.php">
<button class="NextPage"> NEXT </button>
</form>



</body> 
</html> 