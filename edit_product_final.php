<?php 
	require 'session_required.php';
	require 'connection.php';

	if(isset($_POST['submit']))
	{
		$product_name = $_POST['product_name'];
		$product_brand = $_POST['product_brand'];
		$product_pack_size = $_POST['product_pack_size'];
		$product_price = $_POST['product_price'];
		$product_place = $_POST['product_place'];
		$product_type = $_POST['product_type'][0];
		$product_quantity = $_POST['product_quantity'];
		$product_id = $_SESSION['product_id'];

		$user->editProduct($product_name,$product_brand,$product_pack_size,$product_price,$product_place,$product_type,$product_quantity,$product_id);
		header("location:customer_home.php");
	}
?>