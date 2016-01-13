<html>
<head>
   <title>Online Cupcake Store</title>
   <link rel="stylesheet" href="styles/cupcakes.css" type="text/css"  />
   </head>
<body background="images/bg6.jpg">

			 <div class="hdcs_main_header">
      <table  align="right" >
	  <tr>
	  <td><font size=4><a  class="main_header_link" href="admin.php"></a></font></td>
      <td></td>  
	  <td><font size=4><a  class="main_header_link" href="signup.php"></a></font></td>
	   <td></td>  
	  <td><font size=4><a  class="main_header_link" href="user.php"></a></font></td>
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
     <div class="images">
      <div style="position:relative;width:200px;height:1400px;border: 0px solid grey;padding: 10px;margin: 10">
	  
<h1>Update stock</h1>
<fieldset style="width:700px;">
<legend>Select product name</legend>
<form action="" method="POST">
<?php

include_once("connect.php");

$sql = "SELECT pd_name FROM product_details";
$result = mysqli_query($conn,$sql);
echo "<select name='pd_name'>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['pd_name'] . "'>" . $row['pd_name'] . "</option>";
}
echo "</select>";
?><br><br>
<input type="submit" name = "get details" value="get details">
</form>
<?php
//if (isset($_POST['get details'])){
@$value=$_POST['pd_name'];
echo "Details for product name: $value";
$details="select * from product_details where pd_name ='$value'";
$result1 = mysqli_query($conn,$details);
while ($row = mysqli_fetch_array($result1)) {
?>
</fieldset>
<fieldset>
<form action="update.php" method = "POST">
<fieldset>
<legend> details</legend>
product ID:<br>
<input type="text" name="productid" value="<?php echo $row['pd_id']; ?>">
<br>
product Name:<br>
<input type="text" name="productname" value="<?php echo $row['pd_name']; ?>">
<br>
product Price:<br>
<input type="text" name="price" value="<?php echo $row['pd_price']; ?>">
<br>
product Type:<br>
<input type="text" name="type"value="<?php echo $row['pd_type']; ?>">
<br>
product description:<br>
<input type="text" name="description" value="<?php echo $row['pd_desc']; ?>">
<br>
<br>
<input type="submit" name="Submit" value="Submit"></fieldset>
</form>
<?php
}

?>
</fieldset>
</div>
</div>
</div>
</div>

</body>
</html>
