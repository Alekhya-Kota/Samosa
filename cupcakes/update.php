<html>
<head>
   <title>Online Cupcake Store</title>
   <link rel="stylesheet" href="styles/cupcakes.css" type="text/css"  />
   </head>
<body background="images/bg6.jpg">
<?php

include_once("connect.php");
include_once("cupcakes_config_file.php");?>
<div class="hdcs_main_header">
      <table  align="right" >
	  <tr>
	  <td><font size=4><a  class="main_header_link" href="admin.php"></a></font></td>
      <td></td>  
	  <td><font size=4><a  class="main_header_link" href="signup.php"></a></font></td>
	   <td></td>  
	  <td><font size=4><a  class="main_header_link" href="user.php"></a></font></td>
	  </tr>
	  <tr>
	  <td align="right"> 
        </td>
		</tr>
		</table>
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
     <div class="images">
      <div style="position:relative;width:200px;height:1400px;border: 0px solid grey;padding: 10px;margin: 10">
<?php
if (isset($_POST['Submit'])){
    $productid=$_POST['productid'];
    $productname=$_POST['productname'];
	echo $productname;
    $type=$_POST['type'];
    $description=$_POST['description'];
    $price  = $_POST['price'];
 // if (isset($_POST['submit'])){
  $update_query="update product_details set pd_name='$productname',pd_price='$price',pd_type='$type',pd_desc='$description' where pd_name='$productname'";
  $result2 = mysqli_query($conn, $update_query);
  }
   if ($result2==1){
   echo "<script>alert('stock updated successfully')</script>";
   echo "<script>setTimeout(\"location.href = '".$project_root."/editItem.php';\",100);</script>";
   exit();
   }
   else{
   echo "Opps something went wrong!";
   }
?>
</div>
</div>
</div>
</div>
</body>
</html>