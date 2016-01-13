<?php

$con=mysqli_connect("localhost", "root", "","cupcakes")or die("cannot connect");  
$auname=$_POST['admname']; 
$apwd=$_POST['admpwd'];
$auname = stripslashes($auname);
$apwd = stripslashes($apwd);
$apwd = md5($apwd);

//echo $apwd;
//$auname = mysqli_real_escape_string($auname);
//$apwd = mysqli_real_escape_string($apwd);

//$sql = "SELECT * FROM user WHERE username='$auname' and password like '$apwd'";

$res=mysqli_query($con,"SELECT * FROM user WHERE username='$auname' and password like '$apwd'");

$cnt=mysqli_num_rows($res);
if($cnt==1)
{
session_start();
$_SESSION['username']=$auname;
header("location:userhome.php");
}
else 
{
	
header("location:userloginfail.php");
}
?>
