<?php
session_start();
include '../dbh.php';

$first=$_POST['first'];
$last=$_POST['last'];
$email=$_POST['email'];
$uid=$_POST['uid'];
$pwd=$_POST['pwd'];


if (empty($first)){
	header("Location: ../signup.php?error=empty");
	exit();
	}
if (empty($last)){
	header("Location: ../signup.php?error=empty");
	exit();
	}
if (empty($email)){
	header("Location: ../signup.php?error=empty");
	exit();
	}
if (empty($uid)){
	header("Location: ../signup.php?error=empty");
	exit();
	}
if (empty($pwd)){
	header("Location: ../signup.php?error=empty");
	exit();
	} else {
		//$sql = "SELECT uid FROM user WHERE uid='$uid'";
		//$result= mysqli_query($conn,$sql);
		//$uidcheck= mysqli_num_rows($result);

		if ($uidcheck >0){
			header("Location: ../signup.php?error=username");
			exit();
		} else {
			$sql="INSERT INTO users (firstName,lastName,email,uid,password, businessId) VALUES('$first','$last','$email','$uid','$pwd', '1')";
			$result= mysqli_query($conn,$sql);
			
			
			$message = "Welcome to Expense Master. We hope we can fill all your needs for expense reporting and submitting!";
			
			if(!isset($_POST['submit']))
			{
				echo "error; You need to submit the form!";
			}
		
			$email_from = 'ExpenseReports@expensemaster.com';
			$email_subject = "Welcome to Expense Master";
			$email_body = "$message".
		
			
			$to = "$email";
			$headers = "From: $email_from \r\n";
			$headers .= "Reply-To: $email \r\n";
			
			mail($to,$email_subject,$email_body,$headers);
		
			header("Location: ../confirm.php");
			
		}
			

	}	
	
