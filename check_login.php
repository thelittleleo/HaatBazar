<?php
	session_start();
	require 'connection.php';
	if(isset($_POST['submit']))
	{
		$user_mobile = $_POST['user_mobile'];
		$user_pass = md5($_POST['user_pass']);

		$check = $user->checkUserType($user_mobile,$user_pass);
		
		if($check)
		{
			if($check['login_type']=='admin')
			{
				$admin = $user->getAdmin($user_mobile);
				$_SESSION['id'] = $admin['admin_id'];
				$_SESSION['mobile'] = $admin['admin_mobile'];
				//var_dump($admin);
				header("location:index_admin.php");
			}

			elseif ($check['login_type']=='customer') 
			{
				$customer = $user->getCustomer($user_mobile);
				$_SESSION['id'] = $customer['customer_id'];
				$_SESSION['mobile'] = $customer['customer_mobile'];
				header("location:index_customer.php");
			}

			elseif ($check['login_type']=='user') 
			{
				$users = $user->getUser($user_mobile);
				$_SESSION['id'] = $users['user_id'];
				$_SESSION['mobile'] = $users['user_mobile'];
				header("location:user_account.php");
			}
		}
		else
		{
			echo "<script> alert('No such accout found'); </script>";
		}
		
		
	}
?>