<?php
	require 'session_required.php';
	require 'connection.php';

	$add_request_id = $_GET['id'];
	$user->deleteAddRequest($add_request_id);
	header("location:current_adds_admin.php");
?>