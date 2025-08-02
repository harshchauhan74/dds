<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['submit1']))
{
    $fname=$_POST['fname'];
    $email=$_POST['email'];
    $mobile=$_POST['mobileno'];
    $subject=$_POST['subject'];
    $description=$_POST['description'];
    $sql="INSERT INTO  tblenquiry(fullname,emailid,phonenumber,subject,description) VALUES(:fname,:email,:mobile,:subject,:description)";
    $query=$dbh->prepare($sql);
    $query->bindParam(':fname',$fname,PDO::PARAM_STR);
    $query->bindParam(':email',$email,PDO::PARAM_STR);
    $query->bindParam(':mobile',$mobile,PDO::PARAM_STR);
    $query->bindParam(':subject',$subject,PDO::PARAM_STR);
    $query->bindParam(':description',$description,PDO::PARAM_STR);
    $query->execute();
    $lastInsertId=$dbh->lastInsertId();
    if($lastInsertId)
    {
        $msg="Enquiry successfully submitted";
        // echo "<script>window.location.href='enquiry.php'</script>";
    }
    else
    {
        $error="Something went wrong. Please try again.";
        // echo "<script>window.location.href='enquiry.php'</script>";
    }
}
?>
<!DOCTYPE html>
<html   >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DDS|Discover Destination System</title>
    <script type="applijewelleryion/x-javascript"> 
        addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); }
    </script>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script src="js/script.js"></script>
    <!-- <script>
       new WOW().init();
    </script> -->
    <style>
        .errorWrap {
            padding: 10px;
            margin: 0 0 20px 0;
            background: #fff;
            border-left: 4px solid #dd3d36;
            box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
        }
        .succWrap{
            padding: 10px;
            margin: 0 0 20px 0;
            background: #fff;
            border-left: 4px solid #5cb85c;
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <!-- top-header -->
    <div class="top-header">
        <?php include('includes/head.php');?>
        <div class="banner-1">
            <div class="container">
                <h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">DDS-Discover Destination System</h1>
            </div>
        </div>
        </div>
        <!-- /banner-1  -->
        <!-- privacy  -->
        <div class="privacy">
            <div class="container">
            <h3 class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">Enquiry</h3>
            <form name="enquiry" method="post">
                <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?></div><?php }
                else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?></div><?php } ?>
                <p style="width: 350px;">
                <b>Full name</b> <input type="text" name="fname" class="form-control" id="fname" placeholder="FullName" require>
                </p>
                <p style="width: 350px;">
                <b>Email</b> <input type="email" name="email" class="form-control" id="email" placeholder="Valid Email id" require>
                </p>
                <p style="width: 350px;">
                <b>Mobile No</b> <input type="text" name="mobileno" class="form-control" id="mobileno" maxlength="10" placeholder="10 Digit Mobile no" require>
                </p>
                <p style="width: 350px;">
                <b>Subject</b> <input type="text" name="subject" class="form-control" id="subject" placeholder="subject" require>
                </p>
                <p style="width: 350px;">
                <b>Description</b> <textarea  name="description" class="form-control" rows="6" cols="50" id="description" placeholder="description" require></textarea>
                </p>
                <p style="width: 350px;">
                <button type="submit" name="submit1" class="btn-primary btn">Submit</button>
                </p>

            </form>


            </div>
        </div>
        <!-- /privacy  -->
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