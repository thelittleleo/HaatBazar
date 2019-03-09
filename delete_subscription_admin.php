<?php
	require 'session_required.php';
	require 'connection.php';

	$shop_id = $_GET['id'];
	$user->deleteSubscriptionAdmin($shop_id);
	header("subscription_admin.php");
?>