<!DOCTYPE html>
<html>

<head>

	<title>Add a pet to the database </title>

</head>
<body>
		
	<?php
		
	$conn = mysqli_connect("localhost", "marw_trowe", "rowet", "marw_trowe")
				or die ('Sorry, cannot connect to MySQL');
	#var conn has the value of mysqli_connect with a "localhost", "username", "password", and "name of database"
	#else it will have the value of the text content, meaning that the connention was not made.
	
	$car_name = strip_tags($_POST['name']);
	#var pet_name has the value of name from the post method
	$car_colour = strip_tags($_POST['colour']);
	#var pet_age has the value of age from the post method
	$car_type = strip_tags($_POST['type']);
	#var pet_type has the value of type from the post method
	
	#the strip_tags function is used for accepting user input for a database entry
	#This will prevent a user from inserting potentially harmful HTML code into your database.
	
	$query = "INSERT INTO car (car_id, car_name, car_age, car_type) 
	VALUES(0, '$car_name', '$car_colour', '$car_type')";
	#var query has the value of the text content above 
		
	mysqli_query($conn, $query);
	#
		
	?>

	<p><a href="add-a-car-record.html">Click here to go back to webpage</a><p>
		
</body>
</html>