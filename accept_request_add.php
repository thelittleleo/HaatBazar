<?php
	require 'session_required.php';
	require 'connection.php';
	$add_request_id = $_GET['id'];
	$add_ac = "Yes";
	$user->acceptRequestAdd($add_ac,$add_request_id);

	header("location:current_adds_admin.php");

?>