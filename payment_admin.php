<?php 
	require 'session_required.php';
	require 'connection.php';
	$shop_id = $_GET['id'];
	$shop = $user->getShopById($shop_id);
	if(isset($_POST['submit']))
	{
		$subscription_shop_id = $shop['shop_id']; 
		$subscription_cost = $_POST['subscription_cost'];
		$subscription_date = date("F j, Y");
		$subscription_period = $_POST['subscription_period'];
		$user->addPayment($subscription_shop_id,$subscription_cost,$subscription_date,$subscription_period);
		$shop_status = "Ok";
		$user->shopOk($shop_status,$subscription_shop_id);
		$shop_message = "";
		$user->shopMessage($shop_message,$subscription_shop_id);
		header("location:subscription_admin.php");

	}
	//$_SESSION['shop_id'] = $id;


	

?>
<!DOCTYPE html>
<html>
<head>
<title>Add New Payment</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Super Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>
<!-- header -->
	<?php 
		include 'header_admin.php';
	?>
<!-- //header -->
<!-- navigation -->
	<?php 
		include 'navbar_admin.php';
	?>
		
<!-- //navigation -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index_admin.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Add Payment Page For (<?php echo $shop['shop_name']; ?>)</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- register -->
	<div class="register">
		<div class="container">
			<h2>Add Payment Here</h2>
			<div class="login-form-grids">
				<h5>payment information</h5>
				<form method="post" enctype="multipart/form-data">
					Payment Cost: 
					<input type="text" name="subscription_cost" placeholder="Enter Payment Cost" required=" "><br>
					Subscription Period:
					<input type="text" name="subscription_period" placeholder="Enter Subscription Peroid" required=" "><br>
					
					<input type="submit" value="Add" name="submit">
				</form>
			</div>
			<div class="register-home">
				<a href="index_admin.php">Home</a>
			</div>
		</div>
	</div>
<!-- //register -->
<!-- //footer -->
<?php include 'footer.php'; ?>
<!-- //footer -->	
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- top-header and slider -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>
<!-- main slider-banner -->
<script src="js/skdslider.min.js"></script>
<link href="css/skdslider.css" rel="stylesheet">
<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});
						
			jQuery('#responsive').change(function(){
			  $('#responsive_wrapper').width(jQuery(this).val());
			});
			
		});
</script>	
<!-- //main slider-banner --> 

</body>
</html>