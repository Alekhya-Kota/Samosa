<?php

$con=mysqli_connect("localhost", "root", "","cupcakes")or die("cannot connect"); 
$pdt_name = $_POST['name']; 
$pdt_price = $_POST['price'];
$pdt_type = $_POST['pro_type'];
$pdt_desc = $_POST['desc'];


$tag_dir = "uploads/";
$tag_file = $tag_dir . basename($_FILES["fileToUpload"]["name"]);
$img_File_Type = pathinfo($tag_file,PATHINFO_EXTENSION);
$img_moe=move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $tag_file); 

//image path
$pdt_file=$tag_file;

$prd_res=mysqli_query($con,"insert into product_details values('NULL','$pdt_name','$pdt_price','$pdt_type','$pdt_desc','$pdt_file') ");
if($prd_res)
header("location:newitem1.php");
?>
