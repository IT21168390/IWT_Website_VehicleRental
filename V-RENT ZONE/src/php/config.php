<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "iwtproject_db";
	
	$newConnection = new mysqli($servername, $username, $password, $dbname);
	
	if ($newConnection->connect_error) {
		die("Connection failed!: ".$newConnection->connect_error);
	}
?>