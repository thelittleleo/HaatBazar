<?php

	require 'function.php';
	try{
		$con=new PDO("mysql:host=localhost;dbname=cloud_shop_db","root","");
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
		$user = new USER($con);
	}

	 catch(PDOException $e)
		{
			 echo $e->getMessage();
		}

	



?>