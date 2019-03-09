<?php
	require 'session_required.php';
	require 'connection.php';

	$offer_id = $_GET['id'];
	$new = $user->getOfferById($offer_id);
	$new_id = $new['offer_id'];
	if(isset($_POST['submit']))
	{
		$offer_details = $_POST['offer_details'];
		$user->updateOffer($offer_details,$new_id);
		header("location:customer_home.php");
	}

?>