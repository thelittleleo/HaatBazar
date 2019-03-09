<?php 
	require 'session_required.php';
	require 'connection.php';
	$ai = $_GET['id'];
	$addss = $user->getAddSettingsById($ai);
	$add_id = $addss['add_id'];
	if(isset($_POST['submit']))
	{
		$add_cost = $_POST['add_cost'];
		$user->editAddSettings($add_cost,$add_id);
		//header("location:add_settings.php");
	}


?> 