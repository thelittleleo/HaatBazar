<?php
	require 'session_required.php';
	require 'connection.php';

	if(isset($_POST['submit']))
	{
		$customer_name = $_POST['customer_name'];
		$customer_city = $_POST['customer_city'][0];
		$customer_sex = $_POST['customer_sex'][0];
		$customer_age = $_POST['customer_age'];
		$customer_address = $_POST['customer_address'];
		$id = $_SESSION['id'];
		$user->editCustomerInfo($customer_name,$customer_city,$customer_sex,$customer_age,$customer_address,$id);
		header("location:index_customer.php");
	}
?>