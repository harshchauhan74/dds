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
<h3>About-us</h3>
<p> The discover destination project aims to create a comprehensive online platform that provide users with a personalized and seamless travel experience. With a clear scope, objectives, and timeline, this project is expected to deliver a high-quality platform that meets the needs of modern travelers.
Through this website user can book all packages of tourist places and hotels. By using this site we can save our time.
</p>
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
