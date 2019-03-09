<?php 
	require 'session_required.php';
	require 'connection.php';
	$shop_id = $_GET['id'];
	
	$shop = $user->getShopById($shop_id);

	if(isset($_POST['change']))
	{
		
					$customer_picture=$_FILES['customer_picture']['name'];
	        //var_dump($picture);
	       			$tmp_dir=$_FILES['customer_picture']['tmp_name'];
	                
	                $upload_dir='shop_images/';
	                $imgExt=strtolower(pathinfo($customer_picture,PATHINFO_EXTENSION));
	                $userpic=$customer_picture;
	                move_uploaded_file($tmp_dir,$upload_dir.$userpic);

	                $image_path="shop_images/".$customer_picture;
					$resize_image="shop_images/resized_$customer_picture";
			
					$imgExt = strtolower(pathinfo($customer_picture,PATHINFO_EXTENSION));

					$src="";
					if($imgExt=="gif"){
						$src=imagecreatefromgif($image_path);
						
						
						
						}
						
					else if($imgExt=="png" ){
						$src=imagecreatefrompng($image_path);
						
						
						
						}
					else if($imgExt=="jpeg" ){
						$src=imagecreatefromjpeg($image_path);
						
						
						
						}
					else if($imgExt=="jpg" ){
						$src=imagecreatefromjpeg($image_path);
						
						
						
						}

						list($width,$height)=getimagesize($image_path);	
						$newWidth=500;
						$newHeight=($height/$width)*$newWidth;
						
						$tmp=imagecreatetruecolor($newWidth,$newHeight);
						imagecopyresampled($tmp,$src,0,0,0,0,$newWidth,$newHeight,$width,$height);
						imagejpeg($tmp,$resize_image,100);
						
						
						$user_pic="resized_$customer_picture";
						var_dump($user_pic);
						$shop_id = $shop['shop_id'];
			
	                
	                //$user_pic=rand(1000,1000000).".".$imgExt;
	                
	                //move_uploaded_file($tmp_dir,$upload_dir.$picture);
	        
	        //$user->createDoctor($name,$specialist,$institute,$time,$phone_number,$email,$picture);

	    $doc=$user->editImageShop($shop_id,$user_pic);

			
		header ("location:shop.php?id=".$shop_id);
	}

	if(isset($_POST['change_logo']))
	{
		
					$customer_picture=$_FILES['customer_picture']['name'];
	        //var_dump($picture);
	       			$tmp_dir=$_FILES['customer_picture']['tmp_name'];
	                
	                $upload_dir='shop_images/';
	                $imgExt=strtolower(pathinfo($customer_picture,PATHINFO_EXTENSION));
	                $userpic=$customer_picture;
	                move_uploaded_file($tmp_dir,$upload_dir.$userpic);

	                $image_path="shop_images/".$customer_picture;
					$resize_image="shop_images/resized_$customer_picture";
			
					$imgExt = strtolower(pathinfo($customer_picture,PATHINFO_EXTENSION));

					$src="";
					if($imgExt=="gif"){
						$src=imagecreatefromgif($image_path);
						
						
						
						}
						
					else if($imgExt=="png" ){
						$src=imagecreatefrompng($image_path);
						
						
						
						}
					else if($imgExt=="jpeg" ){
						$src=imagecreatefromjpeg($image_path);
						}
					else if($imgExt=="jpg" ){
						$src=imagecreatefromjpeg($image_path);
						}

						list($width,$height)=getimagesize($image_path);	
						$newWidth=500;
						$newHeight=($height/$width)*$newWidth;
						
						$tmp=imagecreatetruecolor($newWidth,$newHeight);
						imagecopyresampled($tmp,$src,0,0,0,0,$newWidth,$newHeight,$width,$height);
						imagejpeg($tmp,$resize_image,100);
						$user_pic="resized_$customer_picture";
						var_dump($user_pic);
						$shop_id = $shop['shop_id'];
			
	                
	                //$user_pic=rand(1000,1000000).".".$imgExt;
	                
	                //move_uploaded_file($tmp_dir,$upload_dir.$picture);
	        
	        //$user->createDoctor($name,$specialist,$institute,$time,$phone_number,$email,$picture);

	    $doc=$user->editLogoShop ($shop_id,$user_pic);

			
		header ("location:shop.php?id=".$shop_id);
	}

	if(isset($_POST['submit']))
	{
		$shop_name = $_POST['shop_name'];
		$shop_brand = $_POST['shop_brand'];
		$shop_phone = $_POST['shop_phone'];
		$shop_area = $_POST['shop_area'];
		$shop_type = $_POST['shop_type'][0];
		$shop_id = $shop['shop_id'];
		$user->editShop($shop_name,$shop_brand,$shop_phone,$shop_area,$shop_type,$shop_id);
		header("location:shop.php?id=".$shop_id);
	}
	


?>


<!DOCTYPE html>
<html>
<head>
<title>Edit Shop</title>
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
	
<!-- //navigation -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index_customer.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Shop Edit Page</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- login -->
	<div class="container mid">
		<div class="col-md-6">
			<img src="shop_images/<?php if($shop['shop_image'] != NULL) 
			{
				echo $shop['shop_image'];
			}
			else
			{
				echo "vector-illustration-supermarket-grocery-store-260nw-518613133.jpg";
			}

			?>" class="img-responsive" style="margin: 0 auto;">
			<form method="POST" enctype="multipart/form-data">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Select Picture</label>
			    <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="customer_picture">
			    </div>
			 
			  <button type="submit" class="btn btn-primary" input type="submit" name="change">Submit</button>
			</form>


			<img src="shop_images/<?php if($shop['shop_logo'] != NULL) 
			{
				echo $shop['shop_logo'];
			}
			else
			{
				echo "220px-No_Logo_logo.svg.png";
			}

			?>" class="img-responsive" style="margin: 0 auto;">
			<form method="POST" enctype="multipart/form-data">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Select Picture</label>
			    <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="customer_picture">
			    </div>
			 
			  <button type="submit" class="btn btn-primary" input type="submit" name="change_logo">Submit</button>
			</form>
		</div>

		<div class="col-md-6">
			<form method="POST" >
			  <div class="form-group">
			    <label for="exampleInputEmail1">Name</label>
			    <input type="text" class="form-control" name="shop_name" id="exampleInputPassword1" value="<?php echo $shop['shop_name']; ?>">
			    
			  </div>

			  <div class="form-group">
			    <label for="exampleInputEmail1">Brand</label>
			    <input type="text" class="form-control" name="shop_brand" id="exampleInputPassword1" value="<?php echo $shop['shop_brand']; ?>">
			    
			  </div>

			  <div class="form-group">
			    <label for="exampleInputEmail1">Phone</label>
			    <input type="text" class="form-control" name="shop_phone" id="exampleInputPassword1" value="<?php echo $shop['shop_phone']; ?>">
			    
			  </div>

			  <div class="form-group">
			    <label for="exampleInputEmail1">Area</label>
			    <input type="text" class="form-control" name="shop_area" id="exampleInputPassword1" value="<?php echo $shop['shop_area']; ?>">
			    
			  </div>

			  <div class="form-group">
			    <label for="exampleInputPassword1">Shop Type</label>
			    <select class="form-control" name="shop_type[]" placeholder="Enter city">
						<option><?php echo $shop['shop_type']; ?></option>
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
					</select>
			  </div>
			  

			  
			  <button type="submit" class="btn btn-primary" input type="submit" name="submit">Submit</button>
			</form>
		</div>
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