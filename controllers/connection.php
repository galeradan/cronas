<?php 
	
		
	// local DB
	// $host = 'localhost'; // this determines the host to use
	// $username = 'root'; //username for the host
	// $password = ''; //password for the host
	// $db = 'cronas_v1'; //database to be used
	
	// remotemysql
	$host = 'remotemysql.com'; // this determines the host to use
	$username = 'WGnV2FAZW1'; //username for the host
	$password = '0muyeBpcNX'; //password for the host
	$db = 'WGnV2FAZW1'; //database to be used 	 	


	$conn = mysqli_connect($host, $username, $password, $db);


	if(!$conn){
		//calls mysqli_error(); returns a string description of the last error message
		// die('message') prnts a message and exits the php script
		die ('connection failed: ' . mysqli_error($conn) . "Looks like there's a problem with remotemysql");
	}else{
		// var_dump('Successfully connected....');
	}


?>