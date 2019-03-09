<?php 
	require 'session_required.php';
	require 'connection.php';

	$user_id = $_GET['id'];
	$user->deleteCustomer($user_id);
	header("location:all_customer.php"); 
?>