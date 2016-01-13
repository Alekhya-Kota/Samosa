<?php
session_start();
?>
<!DOCTYPE html>
<html>
 <head>
   <title>Online Cupcake Store</title>
   <link rel="stylesheet" href="styles/cupcakes.css" type="text/css"  />
   <script>
    function redirect(){
var a=document.getElementById("bank").value;
window.location=a;
}
</script>
   </head>
 <body>
   <div class="hdcs_main_body_cen">
   <span style="color:blue;float:right;font-size:20px"><font  >Welcome to <?php echo $_SESSION['username'] ?><br><a href="userlogout.php">Logout</a></font></span>
   
   <p><center><font color="red" size=6>Your Request is received,Thank you</font><br>
   <a href='userhome.php'>back</a>
   </center></p>
 </body>
</html>