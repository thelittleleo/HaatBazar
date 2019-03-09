<?php
	require 'session_required.php';
	require 'connection.php';
	$product_id = $_GET['id'];
	$product = $user->getProductById($product_id);
	$offer_shop_id = $product['product_shop_id'];
	$offer_id = $user->addOffer($offer_shop_id,$product_id);
	if(isset($_POST['submit']))
	{
		$offer_details = $_POST['offer_details'];
		$user->pdateOffer($offer_details,$offer_id);
		header("location:customer_home.php");
	}
?>