<?php
	require 'session_required.php';
	require 'connection.php';
	$offer_id = $_GET['id'];
	$user->deleteOffer($offer_id);
	header("location:customer_home.php");
?>