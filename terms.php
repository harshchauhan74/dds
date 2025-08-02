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
<h3>Terms of Use</h3>
<p>Welcome to Discover Destination Syastem.By Using our website and services, you agree to comply with and be bound by the following terms and conditions. Please read them Carefully.
</p>
<h5>Cancellation and Refund Policy</h5>
<!-- • Cancellations fees are as follows:<br> -->
<p> 10% of the total cost if canceled the package after 24 hours.
</p>
<h5>Liability and Insurance</h5>
<p>• The Company is not liable for any injuries, losses, or damages incurred during the tour.<br>
• Customers are strongly advised to obtain travel insurance to cover any unforeseen circumstances.
</p>
<h5>Acceptance of Terms</h5>
<p>
• By using our services, Customers acknowledge that they have read, understood, and agree to these terms and conditions.
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