<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link type="text/css" href="login-style.css" rel="stylesheet" />
</head>
<style>
	body{
		background-color: grey;
		color: fff;
		width: 960px;
		height: auto;
		text-align: center;
		border: 5px solid #000;
		margin: 2px;
	}
</style>
<body>
	
	<?php
			/*
				this script will 
			*/
			
		$conn = mysqli_connect("localhost", "marw_trowe", "rowet", "marw_trowe")
			or die ('Sorry, cannot connect to MySQL');
		#var conn has the value of mysqli_connect with a "localhost", "username", "password", and "name of database"
		#else it will have the value of the text content, meaning that the connention was not made.
		
		echo "<p> Welcome reg user, you are now logged in </p>";
			echo "<p><a href='#'> Add pet </a></p>";
			echo "<p><a href='display-all-pets.php'> Show pet </a></p>";
			echo "<p><a href='#'> Search pet </a></p>";
			echo "<br>";
			echo "<br>";
			echo "<p><a href='logout.php'> Logout </a></p>";
			#display hyrerlinks to user
		
		
	?>
	
</body>
</html>