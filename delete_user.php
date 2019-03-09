<?php 
	require 'session_required.php';
	require 'connection.php';

	$user_id = $_GET['id'];
	$user->deleteUser($user_id);
	header("location:users.php"); 
?>