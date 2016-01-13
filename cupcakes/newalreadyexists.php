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
	    <form action="newuser.php" method="post"><br><Br><br>   
		<Fieldset><legend><font color="blue" size=6>New User Registration</legend>
<table class="admin_log_table" align="center">
        <tr>
		<th colspan=2>UserName/Email id is already present in our database</th>
		</tr>
		<tr>
		  <th colspan=2>New User</th>
		</tr>
		<tr>
		<th>First Name:</th>
		<th><input type="text" name="firstname" placeholder="first name" required/></th>
		</tr>

		<tr>
		<th>Last Name:</th>
		<th><input type="text" name="lastname" placeholder="last name" required/></th>
		</tr>
		<tr>
		<th>User ID:</th>
		<th><input type="text" name="admname" placeholder="username" required/></th>
		</tr>
		<tr>
		<th>Email Id:</th>
		<th><input type="email" name="email" placeholder="emailid" required/></th>
		</tr>
		<tr>
		<th>Mobile Number:</th>
<th><input pattern="[0-9]{10}" name="mobile" type="text" title="enter correct mobile number" placeholder="mobileno"/>
		</tr>
		<tr>
		<th>Address</th>
		<th><textarea cols=20 rows=10 name="add"></textarea></th>
		</tr>
		<tr>
		<th><input type="submit" value="submit" /></th>
		<th><input type="reset" value="reset" /></th>
		</tr>

	 </table>
   </fieldset>
      </form>
   </div>    
   
   
   
 </body>
</html>