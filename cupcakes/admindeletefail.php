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
				   <li><a href="graduation.php">Christmas</a></li>
				   
				</ul>         
			 </li>
			 <li><a href="aboutus.php">About us !</a>
				     
			 </li>
		  </ul>
</div>

   <div class="hdcs_main_body_cen">
   <span style="color:blue;float:right;font-size:20px"><font  >Welcome to Admin<br><a href="admin.php">Logout</a></font></span>
   <span style="color:red;font-size:40px;">
   <center><p>
<table align="center" border=3 bordercolor="blue">
<tr><th colspan=6>Unable to delete,try again</th></tr>
<tr>
<th>Name</th>
<th>Price</th>
<th>Type</th>
<th>Description</th>
<th>Image</th>
<th>Operation</th>
</tr>
  <?php

mysqli_connect("localhost", "root", "")or die("cannot connect"); 
mysqli_select_db("cupcakes")or die("cannot select DB");
 
$res=mysqli_query("SELECT * FROM product_details");
?>

<?php
while($next_row=mysqli_fetch_row($res)){
	?>
	<tr>
	<th><?php echo $next_row[1] ?></th>
	<th><?php echo $next_row[2] ?></th>
	<th><?php echo $next_row[3] ?></th>
	<th><?php echo $next_row[4] ?></th>
	<th><img src='<?php echo $next_row[5] ?>' width=100 height=100/></th>
	<th><a href='deleteitem1.php?pname=<?php echo $next_row[1] ?>'>delete</th>
	</tr>
	<?php
}
?>

</table>
	 </center>
   </span>
   </div>    
   
  
 </body>
</html>