<!DOCTYPE html>
<html>
<head>
	<title>Capture User Statistics</title>
</head>
<style>
	body{
	background-color: grey;
	color: #000;
	max-width: 450px;
	height: 630px;
    background: #FAFAFA;
    padding: 30px;
    margin: 50px auto;
    box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.35);
    border-radius: 10px;
    border: 6px solid #000;
}
</style>
<body>
	
	<?php
		//Browser Detection
		$browser = $_SERVER['HTTP_USER_AGENT'];
		//Resolution
		#this is creating the website user agent - checking what browser opened the page
		
		if(isset($_COOKIE['users_resolution'])){
			#if there is a cookie allready
			$screen_res = $_COOKIE['users_resolution'];
			#var screen_res has the value of _COOKIE
			#this is getting the resolution of the users screen
		} else {
			#if there is no cookie, do this
			#will run JavaScript to create a cookie
	?>
	<script language='javascript'>
	<!-- declaration of script -->
	
	//function will create a cookie that saves the screen resolution of the sure
	
	function writeCookie()
	//creation of function writeCookie
		{
			var today = new Date();
			//new var today has the value of a new Date
			var the_date = new Date('December 31, 2023');
			//var the_date has the value of Date
			//this is creating an experation for the cookie
			var the_cookie_date = the_date.toGMTString();
			//var the_cookie_date has the value of the_date 
			var the_cookie = 'users_resolution='+screen.width+'x'+screen.height;
			//var the_cookie has the value of 'users_resolution' text + the screen width and height
			var the_cookie = the_cookie + ';expires='+the_cookie_date;
			//var the_cookie has the value of itself and the experation date
			document.cookie = the_cookie;
			//cookie has the value of the_cookie
			location = 'capture_stats.php';
			//location has the value of the webpage name (capture-stats.php)
		}
		writeCookie();
		//run function writeCookie
	</script>
	<?php
		}
		$conn= mysqli_connect("localhost", "marw_trowe", "rowet", "marw_trowe")
			or die ("Sorry -  could not connect to MySQL");
		//checking connenction to mysql database
		
		$query = "INSERT INTO stats VALUES ('$browser', '$screen_res')";
		//var query has the value $browser + $screen_res
		//creating the address agent - not creating the query only creating the variable
		
		$result = mysqli_query($conn, $query);
		//var result has the value of the connection to the database and the query variable
		//creating the query
		
		if ($result) 
			//if the result is sucssessful, do this;
		{
			echo "User statistics added." . "<br />" . "Thankyou for partisipating.";
			//print out the added and thankyou for user input.
			
		} else {
			//if the result is not sucssessful, do this;
			echo "User stats not added to database.";
		}
	?>
</body>
</html>
