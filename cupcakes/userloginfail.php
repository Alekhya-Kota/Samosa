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
   <div class="images">
	    <form action="userlogin.php" method="post"><br><Br><br>
	 <Fieldset><legend><font color="blue" size=6>User Login</legend>
	 <table class="admin_log_table" align="center">
		<tr>
		<th colspan=2>Invalid UserName/Password</th>
		</tr>
		<tr>
		  <th colspan=2>Welcome to User</th>
		</tr>
		<tr>
		<th>UserName:</th>
		<th><input type="text" name="admname" placeholder="username" required/></th>
		</tr>
		<tr>
		<th>Password:</th>
		<th><input type="password" name="admpwd" placeholder="password" required/></th>
		</tr>
		<tr>
		<th><input type="submit" value="submit" /></th>
		<th><input type="reset" value="reset" /></th>
		</tr>
      
	 </table>
</fieldset>
	 </form>
   </div>
   </div>    
   
   <div class="hdcs_main_footer">
     <h1 id="hdcs_main_footer">
	    &copy;Copyright 2015
	 </h1>
   </div>
   
 </body>
</html>