<!DOCTYPE html>
<html>

<head>

	<title>Edit a Pet</title>
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
    color: #000;
    padding: 8px 18px;
    text-decoration: none;
    font: 12px Arial, Helvetica, sans-serif;
}
</style>
</head>
<body>

<!-- 
		Points to remember
 When you use hyperlinks to run a PHP script, you must use the $_GET[' '] method.
 Use the $_POST[' '] method when running a script using a button.
 You add data to the end of URL by using a question mark ( ? ) and typing which piece of data you want to send. You can send as many
items as you wish by separating each item with an ampersand ( & ):
o edit-a-pet-record.php?pet_id=1&name=Phil
 Hidden form inputs are used when you want to refer to fields in a database (such as ID) but do not want them displayed on the web page.
This allowed us in the example to use the Pet ID as a search parameter to find a pet’s record in the database, but not display to the user
the ID number in the editing page. This prevents the user from deleting sensitive data by mistake.
 We have used the following types of SQL query:
o SELECT – selects data from a given MySQL table
o INSERT – inserts data in to a MySQL table
o DELETE – removes data from a MySQL table
o UPDATE – changes data in a MySQL table
	
	-->
		
	<?php
	
	/*
		this script will update the recored from the edit-pet-script to the database recored of the pets table
	*/
		
	$conn = mysqli_connect("localhost", "marw_trowe", "rowet", "marw_trowe")
				or die ('Sorry, cannot connect to MySQL');
	#var conn has the value of mysqli_connect with a "localhost", "username", "password", and "name of database"
	#else it will have the value of the text content, meaning that the connention was not made.
	
	$pet_id = strip_tags($_POST['id']);
	#var pet_id has the value of id from the post method
	
	$pet_name = strip_tags($_POST['name']);
	#var pet_name has the value of name from the post method
	$pet_age = strip_tags($_POST['age']);
	#var pet_age has the value of age from the post method
	$pet_type = strip_tags($_POST['type']);
	#var pet_type has the value of type from the post method

	$query = "UPDATE pets
				SET pet_id='$pet_id', pet_name='$pet_name', pet_age='$pet_age', pet_type='$pet_type'  
				WHERE pet_id='$pet_id' ";
	#updating pets with contect from the html names
	
	mysqli_query($conn, $query);
	#send values of conn and query
	
	echo "You have edited a pet recored(s)";
	#message of complete
	
		echo mysqli_error($conn);
		#test if error
	?>

	<p><a href="edit-pet.php">Click here to go back to webpage</a><p>
		
</body>
</html>