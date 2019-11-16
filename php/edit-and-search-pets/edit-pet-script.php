<!DOCTYPE html>
<html>
<head>
	<title>Edit a Pet</title>
	<link type="text/css" href="pet-style.css" rel="stylesheet" />
</head>
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
				this script will allow the user to edit a pet recored from the database
			*/
			
		$conn = mysqli_connect("localhost", "marw_trowe", "rowet", "marw_trowe")
			or die ('Sorry, cannot connect to MySQL');
		#var conn has the value of mysqli_connect with a "localhost", "username", "password", and "name of database"
		#else it will have the value of the text content, meaning that the connention was not made.
	
		$pet_id = $_GET['pet_id'];
		#var pet_id has the get value of pet_id
		
		$data = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM pets WHERE pet_id='$pet_id'") );
		#var data has the value of pet_id if it = the value of $pet_id
	?>
	
	<form action="update-pet-details.php" method="post">
	<!-- link to php and creation of form -->
		<input type="hidden" name="id" value="<?php echo $data['pet_id'] ?>" /> </p>
		
		<p> Enter Pet Name: <input type="text" name="name" value="<?php echo $data['pet_name'] ?>"/> </p>
		<p> Enter Pet Age: <input type="text" name="age" value="<?php echo $data['pet_age'] ?>" /> </p>
		<p> Enter Pet Type: <input type="text" name="type" value="<?php echo $data['pet_type'] ?>" /> </p> 
		<!-- options for pets -->
		<p> <input type="submit" value="Update Pet Details" /> </p>
		<!-- submission button -->
	</form>
	
</body>
</html>