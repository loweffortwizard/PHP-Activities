<!DOCTYPE html>
<html>
<head>
	<title>Delete a Pet</title>
	<link type="text/css" href="pet-style.css" rel="stylesheet" />
</head>
<style>
h1{
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	text-align: center;
}
p{
	color: #fff;
}
body{
	background-color: #D1C8D4;
}
</style>
<body>	
	
	<?php
			/*
				this script will delete a recored from the pets database
			*/
			
		$conn = mysqli_connect("localhost", "marw_trowe", "rowet", "marw_trowe")
			or die ('Sorry, cannot connect to MySQL');
		#var conn has the value of mysqli_connect with a "localhost", "username", "password", and "name of database"
		#else it will have the value of the text content, meaning that the connention was not made.
		
		$id = $_GET['pet_id'];
		#var id has the value of pet_id
		
		#mysqli_query($conn, "DELETE FROM pets WHERE pet_id='$id'");
		#deleting recored based on id 
		
		echo 'Notice';
		
		echo '<br>';
		echo '<br>';
		#create new lines
			
	if(mysqli_query($conn, "DELETE FROM pets WHERE pet_id='$id'")){
		echo 'You have deleted a recored';
			#message to user
			
			echo '<br>';
			echo '<br>';
			#create new lines
			
			echo '<a href=delete-a-pet.php> <p>Return</p> </a>';
			#return back to pets table 	
	} 
	else {
		echo 'There was an issue deleting the record: <strong>' . mysqli_error($conn) . '</strong>';
		#if there is an issue - print this out
	}
	
	?>
	
</body>
</html>