<?php
session_start();
?>
<!DOCTYPE html>
<html>
 <head>
   <title>Online Cupcake Store</title>
   <link rel="stylesheet" href="styles/cupcakes.css" type="text/css"  />
   <script>
   var i=0;
   var total_amount=0;
     function calculate(){
		 var price=document.forms[i].elements[0].value;
		 //alert(price);
		 var qnt=document.forms[i].elements[1].value;
		//alert(qnt);
		 if(isNaN(qnt))
	{
			 alert("enter quantity correctly");
	}
	else
	{
		var total=price*qnt;
		document.forms[i].elements[2].value=total;
		total_amount=total_amount+total;
		document.getElementById('total').value=total_amount;
	}
	i++;
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
   <span style="color:red;font-size:40px;">
   
	 <table style="border:2px solid blue;" width=80%>
	 <tr><th colspan=4><font color='red' size=6 >Review Orders</font></th></tr>
	 <tr><th><font color='red' size=4>Image</font></th>
	 <th><font color='red' size=4 >Price</font></th>
	 <th><font color='red' size=4 >Quantity</th>
	 <th><font color='red' size=4 >total price</font></th></tr>
	 <tr>
  <?php
  
  if($_SERVER["REQUEST_METHOD"] == "POST"){//to run PHP script on submit
 if(!empty($_POST['selected_item'])){

if (session_status() == PHP_SESSION_ACTIVE) {
	
	foreach($_POST['selected_item'] as $selected){
 $con=mysqli_connect("localhost", "root", "","cupcakes")or die("cannot connect"); 
$res=mysqli_query($con,"select * from product_details where pd_name='$selected' ");
$i=0;
while($next_row=mysqli_fetch_row($res)){
		
		?>
<form method="post">
	<th><img src='<?php echo $next_row[5] ?>' width=100 height=100 style="border:2px solid grey;"/></th>
	<th><input type="text" value='<?php echo $next_row[2] ?>' id="price1" name="price" disabled size=5></th>
	<th>
	<select id="qnt" onChange="calculate()">
	<option value="1">1
	<option value="2">2
	<option value="3">3
	<option value="4">4
	<option value="5">5
	</select>
	</th>
	<th><input type="text" name='total_price' size=10 id="total_price1"></th>	
    </tr></form>
   <?php    
	
		}
   ?>
   
   <?php
 }
 }
 }
 else
	{
	 header("location:noitemsselected1.php");
	}
 }
?>
<tr><th></th><th></th><th><font color='red' size=4 >Total Amount</font></th>
<th><input type="text" id="total" >
</tr>

</table>
<form action="payment.php" method="post">
<table align="Center">
 <tr><th colspan=2><font color='red' size=4>Delivery Address</font></th></tr>
  <tr><th><font color='red' size=4 >Address Line1:</th></th><th><input type="text" name="add1" placeholder="Address Line1" required ></th></tr>
<tr><th><font color='red' size=4 >Address Line2:</th></th><th><input type="text" name="add2" placeholder="Address Line2" ></th></tr>
<tr><th><font color='red' size=4 >City</font></th><th><input type="text" name="city" placeholder="City" required ></th></tr>
<tr><th><font color='red' size=4 >State:</font></th><th><input type="text" name="sate" placeholder="State" required ></th></tr>
<tr><th><font color='red' size=4 >ZipCode:</font></th><th><input type="text" name="zip" placeholder="zipcode" required ></th></tr>
<tr>
<th></th>
<th><input type="image" src="images/payment.png" /></th>
</tr>


</table>

   </form>
   
   
  
   </span>
   </div>    
   
   


   
 </body>
</html>