<?php 
	require 'session_required.php';
	require 'connection.php';

	$shop_id = $_GET['id'];
	
	$offer = $user->getOfferByShop($shop_id);
	

	


?>


<!DOCTYPE html>
<html>
<head>
<title>Offer</title>
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
<style type="text/css">
	.mid
	{
		margin-bottom: 2%;
		margin-top: 2%;
	}
	.im
	{
		margin-left: 44%;
		margin-top: 2%;
	}
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
		include 'header_customer.php';
	?>
<!-- //header -->
<!-- navigation -->
	<?php 
		include 'navbar_customer.php';
	?>
<!-- //header -->
<!-- navigation -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index_customer.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Offer List Page</li>
			</ol>
		</div>
	</div>
<!-- //navigation -->
<!-- breadcrumbs -->
	<div class="container" style="margin-top: 2%">
		<h3 class="text-center" style="margin-bottom: 2%"> Offer List </h3>
			<table class="table">
			  <thead class="thead-dark">
			    <tr class="text-center">
			      <th scope="col" class="text-center">Image</th>
			      <th scope="col" class="text-center">Name</th>
			      <th scope="col" class="text-center">Brand</th>
			      <th scope="col" class="text-center">Pack Size</th>
			      <th scope="col" class="text-center">Price</th>
			      <th scope="col" class="text-center">Quantity</th>
			      <th scope="col" class="text-center">Offer</th>
			      <th scope="col" class="text-center">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php foreach ($offer as $row) {
			  		
			  		$product = $user->getProductById($row['offer_product_id']);
			  		
			  		 ?>
			    <tr class="text-center">
			      	<td><img src="product_images/<?php if($product['product_image'] != NULL) 
					{
						echo $product['product_image'];
					}
					else
						{
							echo 'No-image-available.jpg';
						}
					?>" style="max-height: 20%; max-width: 25%; margin: 0 auto;" class="img-responsive"></td>
					<td class="text-center"><?php echo $product['product_name']; ?></td>
					<td class="text-center"><?php echo $product['product_brand']; ?></td>
					<td class="text-center"><?php echo $product['product_pack_size']; ?></td>
					<td class="text-center"><?php echo $product['product_price']; ?></td>
					<td class="text-center"><?php echo $product['product_quantity']; ?></td>
					<td class="text-center"> 
						<form class="form-inline" method="POST" action="edit_offer.php?id=<?php echo $row['offer_id']; ?>">
							Offer: <input type="number" name="offer_details" value="<?php echo $row['offer_details']; ?>">
									<input type="submit" name="submit" value="Update">
						</form>	
						</td>
					<td class="text-center"> <button type="button" class="btn btn-warning" onclick="window.location.href='delete_offer.php?id=<?php echo $row['offer_id']; ?>'">Delete</button></td>
					</tr>
			    
			   <?php } ?> 
			  </tbody>
			</table>
	</div>
<!-- //login -->
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