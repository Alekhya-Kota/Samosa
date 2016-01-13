<?php
session_destroy();
?>
<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){//to run PHP script on submit
 if(!empty($_POST['selected_item'])){

if (session_status() == PHP_SESSION_NONE) {
	header("location:user.php");
}
else
{
	header("location:index.php");
}
 }
 else
	{
	 header("location:noitemsselected.php");
	}
}
?>