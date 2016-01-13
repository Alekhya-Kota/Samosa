
<?php
session_start();
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
      <div>
   
       <img src="images/cupcakeb.jpg" width=80 height=80 align='left' />
       <p><h1 id="logo"><font color="white">Online Cupcake Store</white></h1>
   </p>
</div>
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
				   <li><a href="birth1.php">Birth Day</a></li>
				   <li><a href="graduation1.php">Christmas</a></li>
				   
				</ul>         
			 </li>
			 <li><a href="aboutus.php">About us !</a>
				     
			 </li>
		  </ul>
</div>

   <div class="hdcs_main_body_cen">
    <div class="images">
      <div style="position:relative;width:200px;height:440px;border: 0px solid grey;padding: 10px;margin: 10">
	  <table style="font-size:30px;height:10em">
	  <tr><th>Sort by Price</th></tr><tr></tr><tr></tr>
  <tr><th><a href="cupckes2.php" style="text-decoration:none;color:red;">High to Low</a></th></tr><tr></tr><tr></tr>
  <tr><th><a href="cupckes3.php" style="text-decoration:none;color:red;">Low to High</a></th></tr><tr></tr><tr></tr>
  <tr><th><a href="cupckes4.php" style="text-decoration:none;color:red;">Below 20$</a></th></tr><tr></tr><tr></tr>
  <tr><th><a href="cupckes5.php" style="text-decoration:none;color:red;">Above 20$</a></th></tr><tr></tr><tr></tr>
	  </table>

   <div style="position:relative;left:220px;width:900px;height:440px;border: 0px solid grey;padding: 10px;margin: 10;top:-320px;">
   <table>
	 <tr><th><font color='red' size=6>CupCakes</font></th></tr>
	 <tr>
</tr>
</table>

<p>
<form action="cupckes24.php" method = "post">
Enter your keyword &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="search" value=""><br>
<input type="submit" value="search">
</form>
</p>
	</div>
</div>	 
   </div>
   </div>
 </body>
</html>