<?php
	require 'session_required.php';
	require 'connection.php';

	if(isset($_POST['submit']))
		{
			$product_name = $_POST['product_name'];
			$product_brand = $_POST['product_brand'];
			$product_pack_size = $_POST['product_pack_size'];
			$product_price = $_POST['product_price'];
			$product_place = $_POST['product_place'];
			$product_type = $_POST['product_type'][0];
			$product_quantity = $_POST['product_quantity'];

			$customer_picture=$_FILES['customer_picture']['name'];
		        
			$tmp_dir=$_FILES['customer_picture']['tmp_name'];
	        
	        $upload_dir='product_images/';
	        $imgExt=strtolower(pathinfo($customer_picture,PATHINFO_EXTENSION));
	        $userpic=$customer_picture;
	        move_uploaded_file($tmp_dir,$upload_dir.$userpic);

	        $image_path="product_images/".$customer_picture;
			$resize_image="product_images/resized_$customer_picture";

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
				$product_shop_id = $_SESSION['shop_id'];
				var_dump($_POST);

				$user->addProduct($product_name,$product_brand,$product_pack_size,$user_pic,$product_price,$product_place,$product_type,$product_quantity,$product_shop_id);

				header("location:index_customer.php");
		}

?>