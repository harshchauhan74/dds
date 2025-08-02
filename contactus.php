<?php

session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
	{	
// header('location:aboutus.php');
}


	?>
<!DOCTYPE HTML>
<html>
<head>
<title>DDS | Admin page Creation</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Discover Destination" />
<script src="js/script.js"></script>
<link href="css/style.css" rel='stylesheet' type='text/css' />



</head> 

<body>
<?php include('includes/head.php');?>
<div class="banner-1">
            <div class="container">
                <h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">DDS-Discover Destination System</h1>
            </div>
        </div>
<div class="privacy">
<div class="container">
<h3>Contact Us</h3>
<h5>Contact Detail</h5>
<p>+91 8759684265<br>
+91 9898652413</p>
<h5>Address Detail</h5>
<p>Nr. New Bus Station, Anand, Gujarat.
388001</p>
</div>	
</div>

<!--copy rights start here-->
<?php include('includes/footer.php');?>
<!--COPY rights end here-->
<!--signup--> 
<?php include('includes/signup.php');?> 
        <!--//signup--> 
        <!--signin--> 
        <?php include('includes/signin.php');?> 
        <!--//signin--> 
        <!--write us--> 
        <?php include('includes/write-us.php');?> 
        <!--//write us-->   
</body>
</html>
