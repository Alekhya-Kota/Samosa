<?php
session_start();
session_unset();
session_destroy();
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

   <div class="hdcs_main_body_cen" style="background-image:url('images/aboutus.jpg');background-repeat:no-repeat;">
   <div class="images" >
   <center>   <font size=7 color="red">Welcome to CupCakes Store</font></center>
   <p>
   <font size=5 color="#ff42dc">At House of Cupcakes, we are proud to make products that encourage people to celebrate the most important occasions<br> of their lives. Look at all of the mouth-watering flavors of cupcakes and Ruthie's Incredible Cookies on our site. <br>We guarantee they taste as delicious as they look. If you want to really make an impression, design a dessert table <br>or create a fabulous cupcake tower to take your next party to new heights! We look forward to making your next event <br>a truly memorable and tasteful experience.</font>
</p>
   </div>
   </div>    
  <div class="hdcs_main_footer">
     <h1 id="hdcs_main_footer">
	    &copy;Copyright 2015
	 </h1>
   </div> 
   
   
 </body>
</html>