<?php 
	session_start();
	require 'connection.php';
	if(isset($_POST['submit']))
	{
		$user_mobile = $_POST['user_mobile'];
		
		$check = $user->checkUser($user_mobile);
		if(empty($check))
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
				$user_type = "user";

				$user->addLoginCustomer($user_mobile,$user_pass,$user_type);
				$id = $user->addUser($user_mobile,$user_name,$user_city,$user_age,$user_sex,$user_address);
				$_SESSION['mobile'] = $user_mobile;
				$_SESSION['id'] = $id;
				echo "<script> alert('Successfully registered!'); </script>";
				header("location:user_account.php?id=$id");
			}
		}
		else
		{
			echo "<script> alert('Already registered with this mobile number!'); </script>";
		}
	}
?>