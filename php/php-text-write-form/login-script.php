<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link type="text/css" href="login-style.css" rel="stylesheet" />
</head>
<style>
table {
    border-collapse: collapse;
	width: 100%;
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	background-color: #fff;
}
th {
    height: 50px;
	background-color: #732A8B;
    color: white;
}
table, th, td {
    border-bottom: 1px solid #ddd;
}
td {
	padding: 15px;
    text-align: center;
}
tr:hover {
	background-color: #f5f5f5;
}
h1{
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	text-align: center;
}
body{
	background-color: #D1C8D4;
}
#del{
	background-color: red;
}
</style>
<body>
	
	<?php
			/*
				this script will login in user 
				and show links to pages
			*/
			
		$conn = mysqli_connect("localhost", "marw_trowe", "rowet", "marw_trowe")
			or die ('Sorry, cannot connect to MySQL');
		#var conn has the value of mysqli_connect with a "localhost", "username", "password", and "name of database"
		#else it will have the value of the text content, meaning that the connention was not made.
		
		//login variables - with post method
		$theUsername = $_POST['username'];
		$thePassword = $_POST['password'];
		
		$row = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM admin
													WHERE username='$theUsername'
													AND password='$thePassword'"));
		# row has the value of the number of rows collected from the mysqi query
		# then selects from admin table where the password and username match what is in the admin table
		
		if ($row > 0){
		#if row has the value greater than 0 - do this - login true
			echo "<p> You have login in</p>";
			echo "<p><a href='#' Add pet </a></p>";
			echo "<p><a href='#' Edit pet </a></p>";
			echo "<p><a href='#' Remove pet </a></p>";
			echo "<p><a href='#' Show pet </a></p>";
			echo "<p><a href='#' Search pet </a></p>";
			#display hyrerlinks to user
		}
		
		else{
		#else login failed - do this
			echo "Login Failed";
			
		}
		
		#notes to remember
		/*
		The mysqli_query() function stores the results of an SQL query in an array.
		 The mysqli_fetch_array() function gets the results from the query named inside the brackets.
		 Queries are written in SQL not PHP – PHP is used to connect to the database, the SQL query is then passed to the database
		and run, with PHP then used to store the results of the query.
		*/
		
	?>
	
</body>
</html>