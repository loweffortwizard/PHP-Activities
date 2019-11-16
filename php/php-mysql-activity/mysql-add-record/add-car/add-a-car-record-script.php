<!DOCTYPE html>
<html>

<head>

	<title>Add a pet to the database </title>
	<link rel="stylesheet" href="style.css" /> <!--css file local -->
</head>
<body>
	<form>
	<?php
		
	$conn = mysqli_connect("localhost", "marw_trowe", "rowet", "marw_trowe")
				or die ('Sorry, cannot connect to MySQL');
	#var conn has the value of mysqli_connect with a "localhost", "username", "password", and "name of database"
	#else it will have the value of the text content, meaning that the connention was not made.
	
	$car_name = strip_tags($_POST['name']);
	#var car_name has the value of name from the post method, also removes html tages from text
	$car_colour = strip_tags($_POST['colour']);
	#var car_age has the value of age from the post method also removes html tages from text
	$car_type = strip_tags($_POST['type']);
	#var car_type has the value of type from the post method also removes html tages from text
	
	#the strip_tags function is used for accepting user input for a database entry
	#This will prevent a user from inserting potentially harmful HTML code into your database.
	
	$query = "INSERT INTO car (car_id, car_name, car_colour, car_type) 
	VALUES(0, '$car_name', '$car_colour', '$car_type')";
	#var query has the value of the following:
		#insert into the database table known as "car" the values below into the columns
		#car_id has a value of 0 which is having the A.I to work in the database
		#car_name in the table has a value of car_name
		#car_colour in the tabe has a value of car_colour
		#car_type in the table has a value of car_type
		
	if( mysqli_query($conn, $query) ) {
	#if successful do this:
		echo ' <strong> You have successfully added' . ' ' . $car_name . ' to the database. </strong> ';
		#print out this text above
	} 
	
	else {
	#if not then do this instead:
		echo ' <strong> Sorry, there was an error in adding the record, please try again. </strong> ';
		#print out the text above	
	}
		
	?>
	<p><a href="add-car-to-database.html">Click here to go back to webpage</a><p><!-- link back to the webpage-->
	</form>	
</body>
</html>