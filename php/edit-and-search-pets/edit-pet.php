<!DOCTYPE html>
<html>
<head>
	<title>Edit a Pet</title>
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
				this script will display records from the pets database
				in a table
			*/
			
		$conn = mysqli_connect("localhost", "marw_trowe", "rowet", "marw_trowe")
			or die ('Sorry, cannot connect to MySQL');
		#var conn has the value of mysqli_connect with a "localhost", "username", "password", and "name of database"
		#else it will have the value of the text content, meaning that the connention was not made.
		
		$query = mysqli_query($conn, 'SELECT * FROM pets');
		# create var named query and asign it the value of the connect to database and all
		##data from the pets table in the database
		
		echo "<h1> Registered Pets </h1>";
		#print header
		
		echo "<table>
				<tr>
					<th>Pet ID</th>
					<th>Pet Name</th>
					<th>Pet Age</th>
					<th>Pet Type</th>
					<th>Edit</th>
				</tr>";
		#print out table headers
		
		while ($row = mysqli_fetch_array($query))
			#for every array data in the query variable - asign it to var row 
			#for every data print out this
		{
			echo "<tr>
					<td> ". $row['pet_id'] ." </td>
					<td> ". $row['pet_name'] ." </td>
					<td> ". $row['pet_age'] ." </td>
					<td> ". $row['pet_type'] ." </td>
					<td> <a href='edit-pet-script.php?pet_id=".$row['pet_id']." '> Edit </a> </td>
					
				</tr>";
				#last row will link to php script to delete the seclete recored
				#as well as display pet_id in the link window
			#print out var row data
		}
		echo "</table>";
	
	?>
	
</body>
</html>