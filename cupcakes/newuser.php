<?php

$con=mysqli_connect("localhost", "root", "","cupcakes")or die("cannot connect"); $fir_name=$_POST['firstname'];
$las_name=$_POST['lastname'];
$user_name=$_POST['admname'];
$pwd=$_POST['pwd'];
$email=$_POST['email'];
$mbno=$_POST['mobile'];
$addr=$_POST['add'];


$res=mysqli_query($con,"SELECT * FROM user WHERE username='$user_name' or emailid='$email'")  or die(mysql_error());
//echo $res;
$cnt=mysqli_num_rows($res);
echo $cnt;
if($cnt>=1){

header("location:newalreadyexists.php");
}
//echo "insert into user values('NULL','$fir_name','$las_name','$user_name','$pass','$email','$mbno','$addr') ";
$password = md5($pwd);
$ins=mysqli_query($con,"insert into user values('NULL','$fir_name','$las_name','$user_name','$password','$email','$mbno','$addr') ");
   if($ins)
   {
    header("location:registerSucc.php");
   }

?>
