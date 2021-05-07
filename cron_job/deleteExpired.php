<?php
	include('../server/config.php');
	
	$conn = mysqli_connect($host, $username, $password, $database);
	//delete expired rows from db
	$query = "DELETE FROM urls WHERE `expiry` <= DATE(NOW())";
	mysqli_query($conn, $query);
?>