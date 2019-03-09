<?php
	require 'session_required.php';
	require 'connection.php';

	$shop_id_get = $_GET['id'];
	$shop = $user->getShopById($shop_id_get);
	$shop_id = $shop['shop_id'];
	$shop_status = "";

	$user->shopOk($shop_status,$shop_id);
	header("location:subscription_admin.php");



?>