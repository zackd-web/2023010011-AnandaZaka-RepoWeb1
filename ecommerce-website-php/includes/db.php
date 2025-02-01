<?php
//server with default setting (user 'root' with no password)

$host = 'localhost'; // server
$user = 'root';
$pass = "";
$database = 'ecom_store'; //Database Name

// establishing connection
$con = mysqli_connect($host, $user, $pass, $database);

// for displaying an error msg in case the connection is not established

	if (!$con) {
		die("Connection failed: " . mysqli_connect_error());
	}

	
