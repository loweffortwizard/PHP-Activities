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
				and show links to pages - with added function to stop mysql injections
				and with levels of access
			*/
			
		$conn = mysqli_connect("localhost", "marw_trowe", "rowet", "marw_trowe")
			or die ('Sorry, cannot connect to MySQL');
		#var conn has the value of mysqli_connect with a "localhost", "username", "password", and "name of database"
		#else it will have the value of the text content, meaning that the connention was not made.
		
		//login variables - with post method
		$theUsername = $_POST['username'];
		$thePassword = $_POST['password'];
		
		//removes special characters such as '' and "" to remove mysql injection
		$theUsername = mysqli_real_escape_string($conn, $theUsername);
		$thePassword = mysqli_real_escape_string($conn, $thePassword);
		
		$level1 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM admin
													WHERE username='$theUsername'
													AND password='$thePassword'
													AND level_access=1"));
		# level1 has the value of the number of rows collected from the mysqi query
		# then selects from admin table where the password and username match what is in the admin table
		
		$level2 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM admin
													WHERE username='$theUsername'
													AND password='$thePassword'
													AND level_access=2"));
		# level2 has the value of the number of rows collected from the mysqi query
		# then selects from admin table where the password and username match what is in the admin table
		
		
		#cheacking user level access to show hyperlinks
		if ($level2 > 0){
		#if level2 has the value greater than 0 - do this - login true
			header("Location: Level-2-homepage.php");
			
		}
		
		else if ($level1 > 0){
		#if level1 has the value greater than 0 - do this - login true
			header("Location: Level-1-homepage.php");
		}
		
		else{
		#else login failed - do this
			echo "Login Failed";
			
		}
		
		#notes to remember
		/*
		The header( “Location: “) function will redirect a user to a different web page/URL
		*/
		
	?>
	
</body>
</html>