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
   <span style="color:blue;float:right;font-size:20px"><font >Welcome to <?php echo $_SESSION['username'] ?><br><a href="userlogout.php">Logout</a></font></span>
   
    <div class="images">
      <div style="position:relative;width:200px;height:440px;border: 0px solid grey;padding: 10px;margin: 10">
	  <table style="font-size:30px;height:10em">
	  <tr><th>Sort by Price</th></tr><tr></tr><tr></tr>
  <tr><th><a href="cupckes6.php" style="text-decoration:none;color:red;">High to Low</a></th></tr><tr></tr><tr></tr>
  <tr><th><a href="cupckes7.php" style="text-decoration:none;color:red;">Low to High</a></th></tr><tr></tr><tr></tr>
  <tr><th><a href="cupckes8.php" style="text-decoration:none;color:red;">Below 20$</a></th></tr><tr></tr><tr></tr>
  <tr><th><a href="cupckes9.php" style="text-decoration:none;color:red;">Above 20$</a></th></tr><tr></tr><tr></tr>
	  <tr><th><a href="cupckes43.php" style="text-decoration:none;color:red;">Search</a></th></tr><tr></tr><tr></tr>
	
	  </table>

   <div style="position:relative;left:220px;width:900px;height:440px;border: 0px solid grey;padding: 10px;margin: 10;top:-320px;">
     <form action="addtocart1.php" method="post">
	 <table>
	 <tr><th><font color='red' size=6>CupCakes</font></th></tr>
	 <tr>
	 <?php

$type="cupcakes";
$_SESSION['type']=$type;
$con=mysqli_connect("localhost", "root", "","cupcakes")or die("cannot connect"); 
$res=mysqli_query($con,"select * from product_details where pd_type='$type' order by pd_price desc");
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
	
	<th><img src='<?php echo $next_row[5] ?>' width=200 height=200 hspace="20" vspace="20" style="border:2px solid grey;"/><br>
	Name: <?php echo $next_row[1] ?><br>
	Price: $<?php echo $next_row[2] ?><br>
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