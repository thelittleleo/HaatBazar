<?php
	require 'session_required.php';
	require 'connection.php';

	$shop_id = $_GET['id'];
	$shop_message = "Your subscription period is almost over! Please renew!";
	$user->shopMessage($shop_message,$shop_id);
	header("location:subscription_admin.php");

?>