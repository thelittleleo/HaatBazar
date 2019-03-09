<?php
	require 'session_required.php';
	require 'connection.php';
	if(isset($_POST['submit']))
	{
		$add_type = $_POST['add_type'][0];
		$add_customer_id = $_SESSION['id'];
		$torres = $user->getAddByTypeCustomer($add_type);
		$add_id = $torres['add_id'];
		$add_cost = $torres['add_cost'];
		$add_start_date = $_POST['add_start_date'];
		$add_end_date = $_POST['add_end_date'];
		$add_shop = $_POST['add_shop'][0];
		$fer = $user->getShopByNameCustomer($add_shop,$add_customer_id);
		$add_shop_id = $fer['shop_id'];
		$add_title = $_POST['add_title'];

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

				$user->addRequestOffer($add_id,$add_cost,$add_start_date,$add_end_date,$add_shop_id,$add_customer_id,$user_pic,$add_title);
				header("location:current_requests.php");

	}


?>