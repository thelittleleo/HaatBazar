<?php 
	require 'session_required.php';
	require 'connection.php';
	if(isset($_POST['submit']))
	{
		$user_mobile = $_POST['user_mobile'];
		
		$check = $user->checkCustomer($user_mobile);
		if($check)
		{
			echo "<script> alert('We've already one existing member with this mobile no.'); </script>";
			$shop_name = $_POST['shop_name'];
			$shop_brand = $_POST['shop_brand'];
			$shop_phone = $_POST['shop_phone'];
			$shop_area = $_POST['shop_area'];
			$shop_type = $_POST['shop_type'][0];
			$shop_start_date = date("F j, Y");
			$sc = $user->getCustomer($user_mobile);
			$shop_customer_id = $sc['customer_id'];

			$user->addShopOldCustomer($shop_name,$shop_brand,$shop_phone,$shop_area,$shop_type,$shop_start_date,$shop_customer_id);
		}
		else
		{
			$user_pass = $_POST['user_pass'];
			$user_pass_2 = $_POST['user_pass_2'];
			if($user_pass != $user_pass_2)
			{
				echo "<script> alert('Password is not confirmed'); </script>";
			}
			else
			{
				$user_name = $_POST['user_name'];
				$user_city = $_POST['user_city'][0];
				$user_age = $_POST['user_age'];
				$user_sex = $_POST['user_sex'][0];
				$user_address = $_POST['user_address'];
				$user_pass = md5($user_pass);
				$user_type = "customer";
				
				$user->addLoginCustomer($user_mobile,$user_pass,$user_type);
				$shop_customer_id = $user->addCustomer($user_mobile,$user_name,$user_city,$user_age,$user_sex,$user_address);
				
				$shop_name = $_POST['shop_name'];
				$shop_brand = $_POST['shop_brand'];
				$shop_phone = $_POST['shop_phone'];
				$shop_area = $_POST['shop_area'];
				$shop_type = $_POST['shop_type'][0];
				$shop_start_date = date("F j, Y");
				
				

				$user->addShopOldCustomer($shop_name,$shop_brand,$shop_phone,$shop_area,$shop_type,$shop_start_date,$shop_customer_id);
				echo "<script> alert('Successfully registered!'); </script>";
			}
		}
	}
?>