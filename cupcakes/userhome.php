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
      <div>
   
       <img src="images/cupcakeb.jpg" width=80 height=80 align='left' />
       <p><h1 id="logo"><font color="white">Online Cupcake Store</white></h1>
   </p>
</div>
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
   <span style="color:blue;float:center;font-size:20px">
   <font  >Welcome to <?php echo $_SESSION['username'] ?><br><a href="userlogout.php">Logout</a></font></span>
   <span style="color:red;font-size:40px;">
   <center>Welcome To CupCakes </center></span>
	 <?php
 $user=$_SESSION['username'];
   $con=mysqli_connect("localhost", "root", "","cupcakes")or die("cannot connect");
   ?>
   
   <div class="payment1" >
                 <form >
	   
	   <table>
	       <tr><th colspan=2><font size=5 color="red"></font></th></tr>
<?php
$res=mysqli_query($con,"select * from user_orders where username='$user' ");



$i=0;
while($next_row=mysqli_fetch_row($res)){
		
		?>
<tr><th><font size=4 color="red">Product Name: </font></th><th><?php echo $next_row[1] ?></th></tr>
<tr><th><font size=4 color="red">Product Type: </font></th><th><?php echo $next_row[2] ?></th></tr>
<tr><th><font size=4 color="red">Price:</font></th><th><?php echo $next_row[7] ?></th></tr>
<tr><th><font size=4 color="red">Quantity: </font></th><th><?php echo $next_row[3] ?></th></tr>
<tr><th><font size=4 color="red">Total Amount:</font> </th><th><?php echo $next_row[4] ?></th></tr>
<tr><th><img src='<?php echo $next_row[5] ?>' width=100 height=100 style="border:2px solid grey;"/> </th></tr>
<?php
}
?>

 		   
		   <tr>
		          </form>
	   </table>
   </div>

</div>    
      
     
 </body>
</html>