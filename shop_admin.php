<?php 
	require 'session_required.php';
	require 'connection.php';
	$shop_id = $_GET['id'];
	$my_shop = $user->getShopById($shop_id);
	$offers = $user->getOffersById($shop_id);
	$products = $user->getProductsById($shop_id);
	
?>
<!DOCTYPE html>
<html>
<head>
<title>Shop</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Super Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/shop.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<style type="text/css">
	
</style>
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
<!-- //header -->
<!-- navigation -->
	
<!-- //navigation -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index_customer.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active"><?php echo $my_shop['shop_name']; ?> Page</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- login -->
	<div class="container">
		<div class="row mid">
			<div class="col-md-5">
				<img src="shop_images/<?php if($my_shop['shop_image'] != NULL)
				{
					echo $my_shop['shop_image'];
				} 
				else
				{
					echo 'vector-illustration-supermarket-grocery-store-260nw-518613133.jpg';
				}
				?>" class="img-thumbnail center-block ik">
			</div>

			<div class="col-md-7 lf">
				<img src="shop_images/<?php if($my_shop['shop_logo'] != NULL)
				{
					echo $my_shop['shop_logo'];
				} 
				else
				{
					echo '220px-No_Logo_logo.svg.png';
				}
				?>" class="img-circle center-block ki"> 
				<div class="pa">
					<p> Shop Name: <?php echo $my_shop['shop_name']; ?></p>
					<p> Shop Brand: <?php echo $my_shop['shop_brand']; ?></p>
					<p> Shop Type: <?php echo $my_shop['shop_type']; ?></p>
					<p> Shop Area: <?php echo $my_shop['shop_area']; ?></p>
				</div>
			</div>
		</div>
		<!-- offers-->
		<h2 class="text-center" style="color:red;"> SALES OFFERS!!! </h2>

		<div class="row offers">
			<?php foreach($offers as $row){ 
				$product = $user->getProductById($row['offer_product_id']);
				?>
				<div class="col-md-2 list">
					<div class="para">
						<h4 class="text-center be"> <?php echo $row['offer_details']; ?>% sales offer </h4>
					</div>
					<img src="product_images/<?php if($product['product_image'] != NULL)
					{
						echo $product['product_image'];
					} 
					else
					{
						echo 'No-image-available.jpg';
					}
					?>" class="img-circle center-block pr">  
					<h4 class="text-center"> <?php echo $product['product_name']; ?> (<?php echo $product['product_pack_size']; ?>)</h4>
					<p class="text-center" style="text-decoration: bold;"> <?php echo $product['product_price']; ?> </p>
					<p class="text-center" style="text-decoration: bold; color: red;">Offered Price: <?php $less = (($product['product_price']*$row['offer_details'])/100);
						echo ($product['product_price']-$less);
					 ?> tk </p>
					<div class="act">
						
						
					</div>
				</div>
				<?php } ?>
			
		</div>


		<!-- offers-->

		<!-- products-->
		<h2 class="text-center" style="color:red;"> PRODUCTS!!! </h2>
		<div class="row dim">
		<?php foreach ($products as $row) { ?>
			
			
			<div class="col-md-2 list">
				<img src="product_images/<?php if($row['product_image'] != NULL)
				{
					echo $row['product_image'];
				} 
				else
				{
					echo 'No-image-available.jpg';
				}
				?>" class="img-circle center-block pr">  
				<h4 class="text-center"> <?php echo $row['product_name']; ?> </h4>
				<p class="text-center" style="text-decoration: bold;"> <?php echo $row['product_pack_size']; ?>  </p>
				<p class="text-center" style="text-decoration: bold;"> <?php echo $row['product_price']; ?> TK. </p>
				<div class="act">
					<button class="btn btn-success" onclick="window.location.href='single_product_admin.php?id=<?php echo $row['product_id']; ?>'">Details</button>
					
				</div>
			</div>
			<?php } ?>	
		</div>
		<!-- products-->
	</div>
<!-- //login -->
<!-- //footer -->
<?php include 'footer.php'; ?>
<!-- //footer -->	
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
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