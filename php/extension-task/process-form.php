<!DOCTYPE html>
<html>
<head>

   <title>Details Accepted</title>
<link rel="stylesheet" href="style.css" /> <!--css file local -->
</head>
<body>

   <p>Thank you for submitting:</p>
		<!-- decloration for p -->
	<div id="container"><!-- decloration for container -->
	   <?php
		
			###############Connecting to database##############

			$conn = mysqli_connect("localhost", "marw_trowe", "rowet", "marw_trowe")
						or die ('Sorry, cannot connect to MySQL');
			#var conn has the value of mysqli_connect with a "localhost", "username", "password", and "name of database"
			#else it will have the value of the text content, meaning that the connention was not made.
			
			###############Creating variables with super global post method##############
			
			#$dvd_id = strip_tags($_POST['dvdId']);
			#var dvd_id has the value of dvdId from the post method
			$dvd_title = strip_tags($_POST['dvdTitle']);
			#var dvd_title has the value of dvdTitle from the post method
			$dvd_age = strip_tags($_POST['age']);
			#var dvd_age has the value of age from the post method
			$dvd_description = strip_tags($_POST['dvdDesctiption']);
			#var dvd_description has the value of dvdDesctiption from the post method
			$selected_radio = strip_tags($_POST['rating']);
			#var selected_radio has the value of rating from the post method
			
			###############inserting data into database tables##############
			
			$query = "INSERT INTO dvd (dvd_id, dvd_title, dvd_description, dvd_age_rating, dvd_rating)
						VALUES(0, '$dvd_title', '$dvd_description', '$dvd_age', '$selected_radio')";
			
			###############testing if the data transfer has worked##############	
				
			if( mysqli_query($conn, $query) ) {
			#if sucsessful do this:
				echo ' <strong> You have successfully added' . ' ' . $dvd_title . ' to your collection. </strong> ';
				#print this content above
			} 
			
			else {
			#if not then do this instead:
				echo ' <strong> Sorry, there was an error in adding the record, please try again. </strong> ';
				#print this content above
			}
		
	   ?>
	</div><!-- closing for container -->
	
</body>
</html>