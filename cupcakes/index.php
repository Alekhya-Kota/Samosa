<?php
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html>
 <head>
   <title>Online Cupcake Store</title>
   <link rel="stylesheet" href="styles/cupcakes.css" type="text/css"  />
   </head>
 <body background="images/bg6.jpg">
  <!--<form action="search.php" method="GET" >
               <input type="text" name="search_text">
               <input type="submit" value="Search" name ="search"><br><br>
			   </form>-->

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
     <div>
   
       <img src="images/cupcakeb.jpg" width=80 height=80 align='left' />
       <p><h1 id="logo"><font color="white">Online Cupcake Store</white></h1>
   </p>
</div>
	  </div>
	  <!-- Search button -->
           
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
				   <li><a href="graduation.php">Chirstmas</a></li>
				   
				</ul>         
			 </li>
			 <li><a href="aboutus.php">About us !</a>
				     
			 </li>
		  </ul>
</div>

   <div class="hdcs_main_body_cen">
   <div id="scroller" style="width: 1000px; height: 400px; margin: 0 auto;">
    <div class="innerScrollArea">
        <ul>
   <li><a href="cookies.php"><img src="images/love.jpg" width="400" height="300" /></a></li>
   <li><a href="cupckes.php"><img src="images/red rose.jpg" width="400" height="300" /></a></li>

   <li><a href="cupckes.php"><img src="images/blackberry.jpg" width="400" height="300" /></a></li>
   

   <li><a href="cakes.php"><img src="images/oven.jpg" width="400" height="300" /></a></li>
   <li><a href="cookies.php"><img src="images/sugar.jpg" width="400" height="300" /></a></li>
   <li><a href="cookies.php"><img src="images/love.jpg" width="400" height="300" /></a></li>
   <li><a href="cupckes.php"><img src="images/multi.jpg" width="400" height="300" /></a></li>
   <li><a href="cookies.php"><img src="images/cpcookie.jpg" width="400" height="300" /></a></li>
   <li><a href="cupckes.php"><img src="images/cupcake.jpg" width="400" height="300" /></a></li>
   <li><a href="cupckes.php"><img src="images/cupcake2.jpg" width="400" height="300" /></a></li>
   <li><a href="cupckes.php"><img src="images/cupcake3.jpg" width="400" height="300" /></a></li>
        </ul>
    </div>
</div>
   </div>    
   
   <div class="hdcs_main_footer">
     <h1 id="hdcs_main_footer">
	    &copy;Copyright 2015
	 </h1>
   </div>
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script type="text/javascript">
    $(function(){
        var scroller = $('#scroller div.innerScrollArea');
        var scrollerContent = scroller.children('ul');
        scrollerContent.children().clone().appendTo(scrollerContent);
        var curX = 0;
        scrollerContent.children().each(function(){
            var $this = $(this);
            $this.css('left', curX);
            curX += $this.outerWidth(true);
        });
        var fullW = curX / 2;
        var viewportW = scroller.width();

        // Scrolling speed management
        var controller = {curSpeed:0, fullSpeed:2};
        var $controller = $(controller);
        var tweenToNewSpeed = function(newSpeed, duration)
        {
            if (duration === undefined)
                duration = 600;
            $controller.stop(true).animate({curSpeed:newSpeed}, duration);
        };

        // Pause on hover
        scroller.hover(function(){
            tweenToNewSpeed(0);
        }, function(){
            tweenToNewSpeed(controller.fullSpeed);
        });

        // Scrolling management; start the automatical scrolling
        var doScroll = function()
        {
            var curX = scroller.scrollLeft();
            var newX = curX + controller.curSpeed;
            if (newX > fullW*2 - viewportW)
                newX -= fullW;
            scroller.scrollLeft(newX);
        };
        setInterval(doScroll, 20);
        tweenToNewSpeed(controller.fullSpeed);
    });
</script>
 </body>
</html>
