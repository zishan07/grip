<?php
	//Connection

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "banking";

	$db=mysqli_connect($servername , $username , $password , $dbname) or die('Cannot connect to server'.mysqli_connect_error());
	
?>
