<?php
session_start();
?>
<!DOCTYPE html>
<html>
 <head>
   <title>Online Cupcake Store</title>
   <link rel="stylesheet" href="styles/cupcakes.css" type="text/css"  />
   <script>
    function redirect(){
var a=document.getElementById("bank").value;
window.location=a;
}
</script>
   </head>
 <body>
    <div class="hdcs_main_header">
      <table  align="right" >
	  <tr>
	  <td><font size=4><a  class="main_header_link" href="admin.php">AdminLogin|</a></font></td>
      <td></td>  
	  <td><font size=4><a  class="main_header_link" href="signup.php">SignUp|</a></font></td>
	   <td></td>  
	  <td><font size=4><a  class="main_header_link" href="user.php">UserLogin</a></font></td>
	  </tr>
	  <tr></table>
      <h1 id="logo">Online Cupcake Store</h1>
	  </div>
      <div id="wrap">
		  <ul class="navbar">
			 <li><a href="index.php">Home</a></li>
			 <li><a href="cupckes1.php">CupCakes</a>
				<ul>
				   <li><a href="blueberry.php">Blueberry</a></li>
				   <li><a href="chocolate.php">Chocolate</a></li>
				</ul>         
			 </li>
			 <li><a href="cookies1.php">Cookies</a>
				<ul>
				   <li><a href="blackandwhitecookie.php">Black and white cookie</a></li>
				   <li><a href="chocolatechipcookie.php">Chocolate chip cookie</a></li>
				</ul>         
			 </li>
			 <li><a href="cakes1.php">Cakes</a>
				<ul>
				   <li><a href="angelfoodcake.php">Angel food cake</a></li>
				   <li><a href="bostoncreampie.php">Boston cream pie</a></li>
				</ul>         
			 </li>
			 <li><a href="">Occasion</a>
				<ul>
				   <li><a href="birth1.php">Birth Day</a></li>
				   <li><a href="graduation1.php">Christmas</a></li>
				   
				</ul>         
			 </li>
			 <li><a href="aboutus.php">About us !</a>
				     
			 </li>
		  </ul>
</div>
   <div class="hdcs_main_body_cen">
   <span style="color:blue;float:right;font-size:20px"><font  >Welcome to <?php echo $_SESSION['username'] ?><br><a href="userlogout.php">Logout</a></font></span>
   
   <div class="payment">
   <br>
   <a href="payment.php"><img src="images/netbanking.png"></a><p>
   <a href="creditcard.php"><img src="images/credit.png"></a><p>
   <a href="debitcard.php"><img src="images/debit.png"></a>
   </div>
   <div class="payment" >
       <table>
	   <form action="submited.php">
	   <tr>
<th>Card Number:</th><th><input type="text" name="cardno" placeholder="Enter Card Number" size=20 /></th>
	       </tr>
		   <tr></tr>  <tr></tr>  <tr></tr>
		   <tr></tr>  <tr></tr>  <tr></tr>
		     <tr></tr>  <tr></tr>  <tr></tr><tr></tr>  <tr></tr>  <tr></tr>
<tr>
<th>Month & Year:</th><th><input type="text" name="month" placeholder="MM/YY" size=10 /></th>
</tr>
  <tr></tr>  <tr></tr>  <tr></tr><tr></tr>  <tr></tr>  <tr></tr>
    <tr></tr>  <tr></tr>  <tr></tr><tr></tr>  <tr></tr>  <tr></tr>
<tr>
<th>CVV :</th><th><input type="text" name="cvv" placeholder="CVV" size=10 /></th>
</tr>
  <tr></tr>  <tr></tr>  <tr></tr><tr></tr>  <tr></tr>  <tr></tr>
    <tr></tr>  <tr></tr>  <tr></tr><tr></tr>  <tr></tr>  <tr></tr>
<tr><th>Enter Name On Card</th><th><input type="text" name="cardonname" placeholder="Enter Name On Card" size=25  /></th></tr>

<tr>
<th colspan=2><input type="submit" value="submit"></th>
</tr>
		 </form>
	   </table>
   </div>

   </div>    
   
   <div class="hdcs_main_footer">
     <h1 id="hdcs_main_footer">
	    &copy;Copyright 2015
	 </h1>
   </div>
   
 </body>
</html>