<!DOCTYPE html>
<html>

<head>

	<title></title>

	<style>
	body{
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	background-color: #fff;
	}
form{
	max-width: 450px;
	height: 630px;
    background: #732A8B;
    padding: 30px;
    margin: 50px auto;
    box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.35);
    border-radius: 10px;
    border: 6px solid #000;
}
p{
	padding-left: 3%;
}
input[type=text] {
	background-color: f5f5f5;
	color: 000;
	box-sizing: border-box;
	border: 2px solid black;
	border-radius: 4px;
}
input[type=submit] {
	box-shadow: inset 0px 1px 0px 0px #fff;
    background-color: f5f5f5;
    border: 1px solid #000;
    display: inline-block;
    cursor: pointer;
    color: #FFFFFF;
    padding: 8px 18px;
    text-decoration: none;
    font: 12px Arial, Helvetica, sans-serif;
}
	</style>
</head>
<body>
		
	<?php
		
	$conn = mysqli_connect("localhost", "marw_trowe", "rowet", "marw_trowe")
				or die ('Sorry, cannot connect to MySQL');
	#var conn has the value of mysqli_connect with a "localhost", "username", "password", and "name of database"
	#else it will have the value of the text content, meaning that the connention was not made.
	
	$pet_name = strip_tags($_POST['name']);
	#var pet_name has the value of name from the post method
	$pet_age = strip_tags($_POST['age']);
	#var pet_age has the value of age from the post method
	$pet_type = strip_tags($_POST['type']);
	#var pet_type has the value of type from the post method

	$query = "INSERT INTO pets (pet_id, pet_name, pet_age, pet_type)
				VALUES(0, '$pet_name', '$pet_age', '$pet_type')";
					
	if( mysqli_query($conn, $query) ) {
	#if :
		echo ' <strong> You have successfully added' . ' ' . $pet_name . ' to the database. </strong> ';
		
	} 
	
	else {
	#if not then do this instead:
		echo ' <strong> Sorry, there was an error in adding the record, please try again. </strong> ';
			
	}
		
	?>

	<p><a href="add-a-pet-record-v2.html">Click here to go back to webpage</a><p>
		
</body>
</html>