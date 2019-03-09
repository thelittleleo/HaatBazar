<?php
	require 'session_required.php';
	require 'connection.php';

	if(isset($_POST['submit']))
	{
		$customer_name = $_POST['user_name'];
		$customer_city = $_POST['user_city'][0];
		$customer_sex = $_POST['user_sex'][0];
		$customer_age = $_POST['user_age'];
		$customer_address = $_POST['user_address'];
		$id = $_SESSION['id'];
		var_dump($_POST);
		$user->editUserInfo($customer_name,$customer_city,$customer_sex,$customer_age,$customer_address,$id);
		header("location:user_account.php");
	}
?>