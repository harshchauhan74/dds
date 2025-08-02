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
    <title>DDS | Package List</title>
    <script type="applijewelleryion/x-javascript"> 
        addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); }
    </script>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script src="js/script.js"></script>
    <script>
    //    new WOW().init();
    </script>
</head>
<body>
    <?php include('includes/head.php');?>
    <div class="banner-3">
        <div class="container">
            <h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">DDS- Package List</h1>
        </div>
    </div>
    <!-- rooms -->
    <div class="rooms">
        <div class="container">
            <div class="holiday">
                <h3>Package List</h3>
                <?php
                $sql="SELECT * FROM tbltourpackages";
                $query=$dbh->prepare($sql);
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                $cnt=1;
                if($query->rowCount() > 0)
                {
                    foreach($results as $result)
                {
                ?>
                <div class="rom-btm">
                    <div class="room-left" data-wow-delay=".5s">
                        <img src="admin/packageimages/<?php echo htmlentities($result->packageimage); ?>" class="img-responsive" alt="">
                    </div>
                    <div class="room-midle" data-wow-delay=".5s">
                        <h4>Package Name : <?php echo htmlentities($result->packagename); ?></h4>
                        <h6>Package Type : <?php echo htmlentities($result->packagetype); ?></h6>
                        <p><b>Pacage Location :</b> <?php echo htmlentities($result->packagelocation); ?></p>
                        <p><b>Features :</b> <?php echo htmlentities($result->packagefeatures); ?></p>
                    </div>
                    <div class="room-right" data-wow-delay=".5s">
                        <h5>INR <?php echo htmlentities($result->packageprice); ?></h5>
                        <a href="package-details.php?pkgid=<?php echo htmlentities($result->packageid); ?>" class="view">Details</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <?php
                }} 
                ?>
            </div>
        </div>
    </div>
    <!-- footer-top -->
    <?php include('includes/footer.php') ?>
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