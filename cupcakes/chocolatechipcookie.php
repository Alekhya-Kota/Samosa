<?php
session_start();

session_destroy();
?>
<!DOCTYPE html>
<html>
 <head>
   <title>Online Cupcake Store</title>
   <link rel="stylesheet" href="styles/cupcakes.css" type="text/css"  />
   </head>
 <body background="images/bg6.jpg">
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
			 <li><a href="cupckes.php">CupCakes</a>
				<ul>
				   <li><a href="blueberry.php">Blueberry</a></li>
				   <li><a href="chocolate.php">Chocolate</a></li>
				</ul>         
			 </li>
			 <li><a href="cookies.php">Cookies</a>
				<ul>
				   <li><a href="blackandwhitecookie.php">Black and white cookie</a></li>
				   <li><a href="chocolatechipcookie.php">Chocolate chip cookie</a></li>
				</ul>         
			 </li>
			 <li><a href="cakes.php">Cakes</a>
				<ul>
				   <li><a href="angelfoodcake.php">Angel food cake</a></li>
				   <li><a href="bostoncreampie.php">Boston cream pie</a></li>
				</ul>         
			 </li>
			 <li><a href="">Occasion</a>
				<ul>
				   <li><a href="birth.php">Birth Day</a></li>
				   <li><a href="graduation.php">Chirstmas</a></li>
				   
				</ul>         
			 </li>
			 <li><a href="aboutus.php">About us !</a>
				     
			 </li>
		  </ul>
</div>

   <div class="hdcs_main_body_cen">
   
      <div style="position:relative;left:100px;width:1100px;height:440px;border: 0px solid grey;padding: 10px;margin: 10;top:-10px;">
     <table>
	 <form action="addtocart.php" method="post">
	<tr>
	<th><font color="Red" size=6>Chocolate Chip Cookie</font></th></tr>
	<tr><th><img src="images/cpcookie.jpg" width=200 height=200></th></tr>
	<tr>
    <th><font color="blue" size=5>A chocolate chip cookie is a drop cookie that originated in the United States and features chocolate chips as its distinguishing ingredient. The traditional recipe combines a dough composed of butter and both brown and white sugar with semi-sweet chocolate chips. Variations include recipes with other types of chocolate as well as additional ingredients such as nuts or oatmeal.</font></th>
	</tr>
</table><p>

</form>
	</div>
 
</div>	 
   </div>
   </div>    
   
   
   
 </body>
</html>