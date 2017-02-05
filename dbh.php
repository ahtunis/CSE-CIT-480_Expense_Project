	<?php


	/////// Update your database login details here /////
	$dbhost_name = "localhost"; // Your host name 
	$database = "soccerproject";       // Your database name
	$username = "root";            // Your login userid 
	$password = "";            // Your password 
	//////// End of database details of your server //////

	//////// Do not Edit below /////////
	try {
	$con = mysqli_connect($dbhost_name, $username, $password, $database);
	//db conn string

		if(!$conn){
			die("Connection failed: ".mysqli_connect_error());
		}

	} catch (PDOException $e) {
	print "Error!: " . $e->getMessage() . "<br/>";
	die();
	}
	
?> 