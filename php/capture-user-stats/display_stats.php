<!DOCTYPE html>
<html>
<head>
	<title>User Statistics</title>
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
	<h3> States on browsers loads for the capture stats: </h3>
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
		
		// Use a select query to find the number of 1440x900 matches
		$rows = mysqli_num_rows(mysqli_query($conn,"SELECT screen_res FROM stats WHERE screen_res='1440x900'"));
		#var rows has the value of all the data in the database table known as screen_res where the resolution is = to 1440x900
		echo "Screen resolution: 1440x900 has a total of ", $rows . " records in the table." . "<hr />";
		//print out the total amount screen resolution data in the database, based on var $rows
		
		// Use a select query to find the number of times IE opend the page
		$ie_rows = mysqli_num_rows(mysqli_query($conn,"SELECT browser FROM stats WHERE browser LIKE '%Trident%'"));
		#var ie_rows has the value of all the data in the database table where the resolution browser was from internet explorer
		echo "Internet Explorer has a total of: ", "<br />" . $ie_rows . " records in the table." . '</p>';
		#print content from var ie_rows
		
		// Use a select query to find the number of times firefox opend the page
		$ff_rows = mysqli_num_rows(mysqli_query($conn,"SELECT browser FROM stats WHERE browser LIKE '%Firefox%'"));
		#var ff_rows has the value of all the data in the database table where the resolution browser was from Firefox
		echo "Firefox has a total of: ", "<br />" . $ff_rows . " records in the table." . '</p>';
		#print content from var ff_rows
		
		// Use a select query to find the number of times edge opend the page
		$edge_rows = mysqli_num_rows(mysqli_query($conn,"SELECT browser FROM stats WHERE browser LIKE '%Edge%'"));
		#var edge_rows has the value of all the data in the database table where the resolution browser was from Edge
		echo "Edge has a total of: ", "<br />" . $edge_rows . " records in the table." . '</p>';
		#print content from var edge_rows
		
		// Use a select query to find the number of times oprea opend the page
		$oprea_rows = mysqli_num_rows(mysqli_query($conn,"SELECT browser FROM stats WHERE browser LIKE '%Oprea%'"));
		#var oprea_rows has the value of all the data in the database table where the resolution browser was from Oprea
		echo "Opera has a total of: ", "<br />" . $oprea_rows . " records in the table." . "<hr />";
		#print content from var oprea_rows
		
		// Use a select query to find the number of times chrome opend the page
		$chrome_rows = mysqli_num_rows(mysqli_query($conn,"SELECT browser FROM stats WHERE browser LIKE '%Chrome%'"));
		#var chrome_rows has the value of all the data in the database table where the resolution browser was from Chrome
		echo "Chrome has a total of: ", $chrome_rows - $edge_rows - $oprea_rows . " records in the table." . '</p>';
		
		#echo "Chrome has a total of: "<br />" . ", $chrome_rows  . " records in the table." . '</p>';
		
		#print content from var chrome_rows
		
	?>

</body>
</html>