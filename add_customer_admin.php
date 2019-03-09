<?php 
	require 'session_required.php';
	require 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Add New Customer</title>
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
				<li class="active">Add New Customer Page</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- register -->
	<div class="register">
		<div class="container">
			<h2>Add New Customer Here</h2>
			<div class="login-form-grids">
				<h5>profile information</h5>
				<form action="add_customer_admin_final.php" method="post">
					<input type="text" name="user_name" placeholder="Name..." required=" " >
					<input type="text" name="user_age" placeholder="Age" required=" " >
					<select class="form-control" name="user_city[]" placeholder="Enter city">
						<option>Dhaka</option>
						<option>Barishal</option>
						<option>Chittagong</option>
						<option>Khulna</option>
						<option>Mymensingh</option>
						<option>Rajshahi</option>
						<option>Rangpur</option>
						<option>Sylhet</option>	
					</select><br>

					<select class="form-control" name="user_sex[]" placeholder="Enter city">
						<option>Male</option>
						<option>Female</option>
							
					</select><br>
					<textarea rows="2" class="form-control" name="user_address" placeholder="Enter your address here"></textarea>

				<h6>Shop's information</h6>
					
					<input type="text" name="shop_name" placeholder="Shop name" required=" " ><br>
					<input type="text" name="shop_brand" placeholder="Shop brand name" required=" " ><br>
					<input type="text" name="shop_phone" placeholder="Phone number of the shop" required=" " ><br>
					<input type="text" name="shop_area" placeholder="Enter the area of the shop" required=" " ><br>
					<select class="form-control" name="shop_type[]" placeholder="Enter city">
						
						<option>Groceries</option>
						<option>Super Shop</option>
						<option>Footwear</option>
						<option>Fashion & Clothing</option>
						<option>Medicine</option>
						<option>Electronics</option>
						<option>Furnitures</option>
						<option>Family Needs</option>
						<option>Books</option>
						<option>Tech Shop</option>
						<option>Hardware</option>
						<option>Sports</option>
						<option>Foods</option>
						<option>Others</option>
							
					</select><br>
					
					
				
				<h6>Login information</h6>
					
					<input type="text" name="user_mobile" placeholder="Mobile Number" required=" " >
					<input type="password" name="user_pass" placeholder="Password" required=" " >
					<input type="password" name="user_pass_2" placeholder="Password Confirmation" required=" " >
					
					<input type="submit" value="Register" name="submit">
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