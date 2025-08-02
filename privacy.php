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
<div class="privacy" >
<div class="container">
<h3>Privacy Policy</h3>
<p>Welcome to Discover Destination. We are Committed to protecting your privacy and ensuring that your personal information is  handled in a safe and responsible manner. this Privacy Policy outlines how we Collect, use, store, and protect your information when you use our services, including our website, mobile applications, and other related services</p>
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
