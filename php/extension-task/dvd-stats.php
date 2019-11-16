<!DOCTYPE html>
<html>
<head>
	<title>DVD Statistics</title>
</head>
<style>
body{
	background-color: grey;
	color: fff;
	max-width: 450px;
	height: 630px;
    background: #FAFAFA;
    padding: 30px;
    margin: 50px auto;
    box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.35);
    border-radius: 10px;
    border: 6px solid #000;
}
p{
	border: 1px solid #000;
}
</style>
<body>
	<h3> DVD Ratings: </h3>
	<hr />
	<?php
	
			# 	a PHP script that interrorgates a MySQL database that stores various 
			#	statistics about users that access a web page.
			
			//mysqli_num_rows
			#The mysqli_num_rows() function returns the number of rows in a result set.
			
			//mysqli_connect
			#The mysqli_connect() function opens a new connection to the MySQL server.
			
			//mysqli_query
			#The mysqli_query() function performs a query against the database.
			
			//echo
			#The echo() function outputs one or more strings.
		
		$conn= mysqli_connect("localhost", "marw_trowe", "rowet", "marw_trowe")
			or die ("Sorry -  could not connect to MySQL");
		//checking connenction to mysql database
		
		//problem below
		$rows = mysqli_num_rows(mysqli_query($conn,"SELECT dvd_rating FROM stats"));
		#
		echo "Rating for: 3 has a total of ", $rows . " records in the table." . "<hr />";
		//print out 
		
		//problem below
		$title3 = mysqli_num_rows(mysqli_query($conn,"SELECT dvd_title FROM stats"));
		#
		echo "Title for rating 3 has a total of: ", "<br />" . $title3 . " records in the table." . '</p>';
		#
		
	?>

</body>
</html>