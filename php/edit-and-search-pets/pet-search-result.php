<!DOCTYPE html>
<html>
<head>
	<title>Search a Pet</title>
	<link type="text/css" href="pet-style.css" rel="stylesheet" />
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
				this script will display records from the pets database
				in a table
			*/
			
		$conn = mysqli_connect("localhost", "marw_trowe", "rowet", "marw_trowe")
			or die ('Sorry, cannot connect to MySQL');
		#var conn has the value of mysqli_connect with a "localhost", "username", "password", and "name of database"
		#else it will have the value of the text content, meaning that the connention was not made.
		
		$pet_name = strip_tags($_POST['name']);
		#var pet_name has the value of posted name
		
		$query = mysqli_query($conn, 'SELECT * FROM pets WHERE pet_name like "%' . $pet_name . '%" ');
		# create var named query and asign it the value of 
		
		echo "<h1> Registered Pets </h1>";
		#print header
		
		echo "<table>
				<tr>
					<th>Pet ID</th>
					<th>Pet Name</th>
					<th>Pet Age</th>
					<th>Pet Type</th>
					<th>Edit</th>
					<th>Add</th>
					<th>Delete</th>
				</tr>";
		#print out table headers
		
		while ($row = mysqli_fetch_array($query))
			#for every array data in the query variable - asign it to var row 
			#for every data print out this
		{
			echo "<tr>
					<td> ", $row['pet_id'] ." </td>
					<td> ", $row['pet_name'] ." </td>
					<td> ", $row['pet_age'] ." </td>
					<td> ", $row['pet_type'] ." </td>
					<td> <a href='add-a-pet-record.php> Add </a> </td>
					<td> <a href='edit-pet-script.php?pet_id=".$row['pet_id']." '> Edit </a> </td>
					<td> <a href='delete-a-pet-script.php?pet_id=".$row['pet_id']." '> Delete </a> </td>
				</tr>";
				#last row will link to php script to delete the seclete recored
				#as well as display pet_id in the link window
			#print out var row data
		}
		echo "</table>";
	
	?>
	
</body>
</html>