<?php
	session_start();
	include 'dbh.php';

	$userId = $_SESSION['user'];
	if(isset($userId)){
		
	$sql = mysqli_query($conn, "SELECT * FROM users WHERE userId= '$userId'");
	$userarray= mysqli_fetch_assoc($sql);
	$user = $userarray['userId'];
	}
?>	
