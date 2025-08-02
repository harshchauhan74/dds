	<?php
session_start();
error_reporting(0);
include('includes/config.php');

if(isset($_POST['submit2']))
{
	if(empty($_SESSION['login']))
	{
		echo "<script>alert('login first');</script>";
	}
	else{

	
$pid=intval($_GET['pkgid']);
$useremail=$_SESSION['login'];
$fromdate=$_POST['fromdate'];
// $todate=$_POST['todate'];
$comment=$_POST['comment'];
$status=0;
$sql="INSERT INTO tblbooking(PackageId,UserEmail,FromDate,Comment,status) VALUES(:pid,:useremail,:fromdate,:comment,:status)";
$query = $dbh->prepare($sql);
$query->bindParam(':pid',$pid,PDO::PARAM_STR);
$query->bindParam(':useremail',$useremail,PDO::PARAM_STR);
$query->bindParam(':fromdate',$fromdate,PDO::PARAM_STR);
// $query->bindParam(':todate',$todate,PDO::PARAM_STR);
$query->bindParam(':comment',$comment,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Booked Successfully";
}
else 
{
$error="Something went wrong. Please try again";
}
	}
}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>DDS | Package Details</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<script src="js/script.js"></script>
	<script>
		 new WOW().init();
	</script>
					<script>
						$(function() {
						$( "#datepicker,#datepicker1" ).datepicker();
						});
					</script>
	  <style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>				
</head>
<body>
<!-- top-header -->
<?php include('includes/head.php');?>
<div class="banner-3">
	<div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> DDS -Package Details</h1>
	</div>
</div>
<!--- /banner ---->
<!--- selectroom ---->
<div class="selectroom">
	<div class="container">	
		  <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
<?php 
$pid=intval($_GET['pkgid']);
$sql = "SELECT * from tbltourpackages where packageid=:pid";
$query = $dbh->prepare($sql);
$query -> bindParam(':pid', $pid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>

<form name="book" method="post">
		<div class="selectroom_top">
			<div class="col-md-4 selectroom_left wow fadeInLeft animated" data-wow-delay=".5s">
				<img src="admin/packageimages/<?php echo htmlentities($result->packageimage);?>" class="img-responsive" alt="">
			</div>
			<div class="col-md-8 selectroom_right wow fadeInRight animated" data-wow-delay=".5s">
				<h2><?php echo htmlentities($result->packagename);?></h2>
				<p class="dow">#PKG-<?php echo htmlentities($result->packageid);?></p>
				<p><b>Package Type :</b> <?php echo htmlentities($result->packagetype);?></p>
				<p><b>Package Location :</b> <?php echo htmlentities($result->packagelocation);?></p>
					<p><b>Features : </b> <?php echo htmlentities($result->packagefeatures);?></p>
					<div class="ban-bottom">
				<div class="bnr-right">
				<label class="inputLabel">Enter Date</label>
				<input class="date" id="datepicker" type="date" placeholder="dd-mm-yyyy"  name="fromdate" required="">
			</div>
			<!-- <div class="bnr-right">
				<label class="inputLabel">To</label>
				<input class="date" id="datepicker1" type="date" placeholder="dd-mm-yyyy" name="todate" required="">
			</div> -->
		
			</div>
						<div class="clearfix"></div>
				<div class="grand">
					<p>Grand Total</p>
					<h3><p>INR<?php echo htmlentities($result->packageprice);?></p></h3>
				</div>
			</div>
			
		<h3 style="padding-top: 3%">Package Details</h3>
				<p style="padding-top: 1%"><?php echo htmlentities($result->packagedetail);?> </p>	
				<div class="clearfix"></div>
		</div>
		<div class="selectroom_btm">
			<h2>Travels</h2>
			<div class="selectroom-info"style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp; margin-top: -70px">
				<ul>
				
					<li class="spe">
						<label class="inputLabel">Comment</label>
						<input class="special" type="text" name="comment" required="">
					</li>
					<?php if($_SESSION['login'])
					{?>
						<li class="spe" >
					<button  type="submit" name="submit2" class="btn-primary btn">Book</button>
						</li>
						<?php } else {?>
							<!-- <li class="sigi"  style="margin-top: 1%"> -->
							<!-- <a href="#" class="btn-primary btn" > Book</a></li> -->
							<li class="spe" >
					<button  type="submit" name="submit2" class="btn-primary btn">Book</button>
						</li>
							<?php } ?>
					
				</ul>
			</div>
			
		</div>
		</form>
<?php }} ?>


	</div>
</div>
<!--- /selectroom ---->
<<!--- /footer-top ---->
<?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signup.php');?>			
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>			
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>
</body>
</html>