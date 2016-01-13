<?php

$con=mysqli_connect("localhost", "root", "","cupcakes")or die("cannot connect"); $pdt_name=$_GET['pname']; 

$res=mysqli_query($con,"delete from product_details where pd_name='$pdt_name'");
if($res)
header("location:deleteitem2.php");
else 
{
header("location:admindeletefail.php");
}
?>
