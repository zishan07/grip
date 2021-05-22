<?php
	//Connection

	$servername = "sql304.epizy.com";
	$username = "epiz_28651824";
	$password = "Ew1I8YyPV9OI";
	$dbname = "epiz_28651824_gripattsf";

	$db=mysqli_connect($servername , $username , $password , $dbname) or die('Cannot connect to server'.mysqli_connect_error());
	
?>