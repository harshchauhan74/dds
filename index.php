<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DDS |discover destination system</title>
    <link rel="stylesheet" href="css/style.css" text="text/css"/>
    <script src="js/script.js"></script>

</head>
<body>
    <?php include('includes/head.php');?>
    <div class="banner">
        <div class="container">
        </div>
    </div>
<!-- holiday -->
<div class="container">
    <div class="holiday">
        <h3>Package List</h3>
<?php $sql ="SELECT * FROM tbltourpackages order by rand() limit 4";
$query=$dbh -> prepare($sql);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowcount()>0)
{
    foreach($results as $result )
    {
        ?>
        <div class="rom-btm">
            <div class="room-left">
                <img src="admin/packageimages/<?php echo htmlentities($result->packageimage);?>" class="img-responsive" alt="">
            </div>
            <div class="room-midle">
                <h4>Package Name : <?php echo htmlentities($result->packagename);?></h4>
                <h6>Package Type : <?php echo htmlentities($result->packagetype);?></h6>
                <p><b>Package Location : </b> <?php echo htmlentities($result->packagelocation);?></p>
                <p><b>Features : </b> <?php echo htmlentities($result->packagefeatures);?></p>
            </div>
            <div class="room-right">
            <h5>INR <?php echo htmlentities($result->packageprice); ?></h5>
                <a href="package-details.php?pkgid=<?php echo htmlentities($result->packageid);?>" class="view">Details</a>
            </div>
            <div class="clearfix"></div>
        `
        </div>
        <?php
    }
}?>
    <div><a href="package-list.php" class="view">View More Packages</a></div>
    </div>
    <div class="clearfix"></div>
</div>
<!-- routes -->
<!-- <div class="routes">
    <div class="container1">
        <div class="col-md-4 routes-left wow fadeInRight animated" data-wow-delay=".5s">
        <div class="enquiry-foot">
            <div class="rou-left">
                <a href="#"><i class="glyphicon-glyphicon-list-all"></i></a>
            </div>
            <div class="rou-rgt wow fadeInDown animated" data-wow-delay="0.5s">
            <div class="rou-rgt" >
                <h3>80000</h3>
                <p>Enquiries</p>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-4 routes-left">
        <div class="register-user">
            <div class="rou-left">
                <a href="#"><i class="fa fa-user"></i></a>
            </div>
            <div class="rou-rgt">
                <h3>1900</h3>
                <p>Registered users</p>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-4 routes-left wow fadeInRight animated" data-wow-delay=".5s">
        <div class="booking-foot">
            <div class="rou-left">
                <a href="#"><i class="fa fa-ticket"></i></a>
            </div>
            <div class="rou-rgt" data-wow-delay="0.5s">
            <div class="rou-rgt">
                <h3>7,00,00,000+</h3>
                <p>Booking</p>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div> -->


    <?php include('includes/footer.php');?> 
    <!--signup--> 
    <?php include('includes/signup.php');?> 
    <!--//signup--> 
    <!--signin--> 
    <?php include('includes/signin.php');?> 
    <!--//signin--> 
    <!--write us--> 
    <?php include('includes/write-us.php');?> 
    <!--//write us--> 
    <!--  -->
</body>
</html>