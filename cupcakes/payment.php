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
       <form >
	   <table>
	       <tr>
		   <th>Select Bank:</th>
		   <th><select id="bank" onChange="redirect()">
		   <option value="">select
		   <option value="https://www.us.hsbc.com">HSBC
		   <option value="https://www.capitalone.com/sign-in/">Capital One Financial Corp
		   <option value="https://www.pnc.com/en/personal-banking/banking/online-and-mobile-banking.html">PNC Financial Services Group Inc
		   <option value="https://onlinebanking.usbank.com/Auth/Login?redirect=internet_banking_logon">U.S. Bankcorp
		   <option value="https://www.bnymellon.com/apac/en/home.jsp">Bank of New York Mellon Corp
<option value="https://www.online.citibank.co.in/products-services/online-services/internet-banking.htm">Citigroup Inc.
<option value="https://www.bankofamerica.com/onlinebanking/online-banking.go">Bank of America Corp
		   
		   <tr>
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