<!DOCTYPE html>
<html>
<head>

	<title>Interacting with a MySQL Database</title>
	
</head>
<body>
	<h1> Status of the database: </h1> 
	<?php
	# The purpose of the script is to return a message to inform us if the connection has been successful or not. 
	#We will be using programming logic you will have learned in unit 06.
	
	$conn = mysqli_connect("localhost", "marw_trowe", "rowet", "marw_trowe")
				or die ('Sorry, cannot connect to MySQL');
	#var conn has the value of mysqli_connect with a "localhost", "username", "password", and "name of database"
	#else it will have the value of the text content, meaning that the connention was not made.
	
	if($conn) {
	#if conn has suceeded do this:	
		echo 'You have connected to your database!';
		#print the text content above
		
	} else {
	#if not then do this:
		echo '<h1> Sorry, connection failed! </h1>';
		//PRINT THIS IS CANNOT CONNECT TO DATABASE
		
	}
	
	/*
			$conn = mysqli_connect('localhost', 'username', 'password', 'database name');
				Use your MySQL username and password
				Your database in college has the same name as your username.
				If you are connecting a website database, then change local host to the domain name.

			The die() function will return a message should the mysqli functions not be successful. Always attempt to give clear concise error messages.
			The if statement in this script is based upon a successful connection to your MySQL account.
	*/

	?>
</body>
</html>