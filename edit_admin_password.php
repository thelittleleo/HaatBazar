<?php 
	require 'session_required.php';
	require 'connection.php';
	$admin_mobile = $_SESSION['mobile'];

	if(isset($_POST['submit']))
	{
		$admin_password = $_POST['admin_password'];
		$admin_re_password = $_POST['admin_re_password'];
		$admin_old_password = $_POST['admin_old_password'];
		if($admin_password != $admin_re_password)
		{
			echo "<script> alert('password didn't match'); </script>";
		}
		else
		{
			$pass = md5($admin_password);
			$user->editPasswordAdmin($pass,$admin_mobile);
			header("location:logout.php");
		}
	}

?>