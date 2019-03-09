<?php 
session_start();

if(empty($_SESSION['mobile'])){
	
	header("location:login.php");
	
	
}



?>