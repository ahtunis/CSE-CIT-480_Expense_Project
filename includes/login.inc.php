<?php
session_start();
include '../dbh.php';
require('../usersession.php');

$uid=$_POST['uid'];
$pwd=$_POST['pwd'];

if (empty($uid)){
	header("Location: ../login.php?error=empty");
	exit();
	}
if (empty($pwd)){
	header("Location: ../login.php?error=empty");
	exit();
}else{

	$useridquery = mysqli_query($conn, "SELECT * FROM users WHERE uid='$uid' AND password='$pwd'");
	$user= mysqli_fetch_assoc($useridquery);
	
	// sets session variable for user to userID from db
	$_SESSION['user'] = $user['userId'];
	

	if(!isset($user)){
		echo "Your username or password is incorrect";
	}else		
		// sets session variable for user to userID from db
		$_SESSION['user'] = $user['userId'];
	}
	header("Location: ../account.php");

