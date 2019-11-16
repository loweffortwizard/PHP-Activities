<!DOCTYPE html>
<html>
<head>
	<title>Logout</title>
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
				this script will log out the active user and end the session
			*/
			
		session_start();
		
		$_SESSION = array(); //this will clear all variables stored in the session var_dump
		session_destroy(); //this will kill the session
		setcookie('PHPSESSID', '', time()-3600, '/', '', 0, 0); //this will kill the cookie
		/*
			When a session starts is creates a cookie named PHPSESSID that is used to store the ID for the current session, 
			if this cookie does not exist it is unable to access the session. 
			Line 17 is used to make sure that when a user logs out, t
			he cookie is destroyed, 
			this will mean if you log out an unauthorised user will not be able to access any restricted pages
		*/
		
		echo 'You have logged out';
		//print message of logout
		echo "<p><a href='login.html'> Login </a></p>";
		//print hyperlink to login
	?>
	
</body>
</html>