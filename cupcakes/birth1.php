<?php
session_start();
?>
<!DOCTYPE html>
<html>
 <head>
   <title>Online Cupcake Store</title>
   <link rel="stylesheet" href="styles/cupcakes.css" type="text/css"  />
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
   <div class="images">
      <div style="position:relative;background-color:#73AD21;width:200px;height:440px;border: 2px solid grey;padding: 10px;margin: 10">

   <div style="position:relative;left:220px;background-color:lightblue;width:900px;height:440px;border: 2px solid grey;padding: 10px;margin: 10;top:-10px;">
     <form action="addtocart2.php" method="post">
	 <table>
	 <tr><th><font color='red' size=6>Birth Day Gifts</font></th></tr>
	 <tr>
	 <?php

$con=mysqli_connect("localhost", "root", "","cupcakes")or die("cannot connect"); 
$res=mysqli_query($con,"select * from product_details  ");
$count=0;
while($next_row=mysqli_fetch_row($res)){
	$count++;
	?>
	
	<th><img src='<?php echo $next_row[5] ?>' width=100 height=100 style="border:2px solid grey;"/><br>
	Name: <?php echo $next_row[1] ?><br>
	Price: <?php echo $next_row[2] ?><br>
	Description:<?php echo $next_row[4] ?><br>
	select:<input type="checkbox" name='selected_item[]' value=<?php echo $next_row[1] ?>></th>
	
	<?php
}
?>
</tr>
</table><p></p>
<input type="image" src="images/addcart.png" />

</form>
	</div>
 
</div>	 
   </div>
   </div>    
   
   
   
 </body>
</html>