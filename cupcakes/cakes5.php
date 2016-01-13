<?php
session_start();
?>
<!DOCTYPE html>
<html>
 <head>
   <title>Online Cupcake Store</title>
   <link rel="stylesheet" href="styles/cupcakes.css" type="text/css"  />
   </head>
 <body  background="images/bg6.jpg">
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
  <tr><th><a href="cakes2.php" style="text-decoration:none;color:red;">High to Low</a></th></tr><tr></tr><tr></tr>
  <tr><th><a href="cakes3.php" style="text-decoration:none;color:red;">Low to High</a></th></tr><tr></tr><tr></tr>
  <tr><th><a href="cakes4.php" style="text-decoration:none;color:red;">Below 20$</a></th></tr><tr></tr><tr></tr>
  <tr><th><a href="cakes5.php" style="text-decoration:none;color:red;">Above 20$</a></th></tr><tr></tr><tr></tr>
  <tr><th><a href="cakes23.php" style="text-decoration:none;color:red;">Search</a></th></tr><tr></tr><tr></tr>
	
	  </table>
   <div style="position:relative;left:220px;width:900px;height:440px;border: 0px solid grey;padding: 10px;margin: 10;top:-320px;">
     <form action="addtocart1.php" method="post">
	 <table>
	 <tr><th><font color='red' size=6>Cakes</font></th></tr>
	 <tr>
	 <?php

$type="cakes";
$_SESSION['type']=$type;
$con=mysqli_connect("localhost", "root", "","cupcakes")or die("cannot connect"); $res=mysqli_query($con,"select * from product_details where pd_type='$type' and pd_price>=20 ");
$count=0;
while($next_row=mysqli_fetch_row($res)){
	if($count==3)
	{
		print "</tr>";
        $count = 0;
	}	
	if($count==0)
	{
		print "<tr>";
        print "<td>";
	}
	?>
	
	<th><img src='<?php echo $next_row[5] ?>' hspace="20" vspace="20" width=200 height=200 style="border:2px solid grey;"/><br>
	Name: <?php echo $next_row[1] ?><br>
	Price:$<?php echo $next_row[2] ?><br>
	<?php echo $next_row[4] ?><br>
	select:<input type="checkbox" name='selected_item[]' value=<?php echo $next_row[1] ?>></th>
	
	<?php
	$count++;
	print "</td>";
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