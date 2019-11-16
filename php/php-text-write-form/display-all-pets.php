<!DOCTYPE html>
<html>
<head>
	<title>pets-stored</title>
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
	background-color: #f5f5f5
}
h1{
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	text-align: center;
}
body{
	background-color: #D1C8D4;
}
</style>
<body>	
	
	<?php
			/*
				this script will display records from the pets database
				in a table
			*/
			
		session_start();
		//check to see if the current session has a logged in user or active user
		if ( isset($_SESSION['user']) ){
		
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
						
					</tr>";
				#print out var row data
			}
			echo "</table>";
			
			//checking the session
			if ($_SESSION['level'] == 1) {
				echo '<a href="Level-1-homepage.php"> Home </a>';
				//display this hyperlink
			}
			
			else if ($_SESSION['level'] == 2) {
				echo '<a href="Level-2-homepage.php"> Home </a>';
				//display this hyperlink
			}
			
			else {
				echo '<a href="login.html"> Log in </a>';
				//display this hyperlink
			}
		}//session
	
	else {
		echo 'Please <a href="login.html"> Log in </a>';
	}
	
	?>
	
</body>
</html>