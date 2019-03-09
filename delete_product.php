<?php 
	require 'session_required.php';
	require 'connection.php';

	$id = $_GET['id'];
	$user->deleteProduct($id);
	$user->deleteOfferProduct($id);
	header("location:customer_home.php");

?>