
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
      <div style="position:relative;width:200px;height:440px;border: 0px solid grey;padding: 10px;margin: 10">
	  <table style="font-size:30px;height:10em">
	  <tr><th>Sort by Price</th></tr><tr></tr><tr></tr>
  <tr><th><a href="cakes6.php" style="text-decoration:none;color:red;">High to Low</a></th></tr><tr></tr><tr></tr>
  <tr><th><a href="cakes7.php" style="text-decoration:none;color:red;">Low to High</a></th></tr><tr></tr><tr></tr>
  <tr><th><a href="cakes8.php" style="text-decoration:none;color:red;">Below 20$</a></th></tr><tr></tr><tr></tr>
  <tr><th><a href="cakes9.php" style="text-decoration:none;color:red;">Above 20$</a></th></tr><tr></tr><tr></tr>
	  </table>

   <div style="position:relative;left:220px;width:900px;height:440px;border: 0px solid grey;padding: 10px;margin: 10;top:-320px;">
   <table>
	 <tr><th><font color='red' size=6>Cakes</font></th></tr>
	 <tr>
</tr>
</table>

<p>
<form action="cakes44.php" method = "post">
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