<!DOCTYPE html>
<html>
<head>

   <title>Details Accepted</title>
<link rel="stylesheet" href="style.css" /> <!--css file local -->
</head>
<body>

   <p>Thank you for submitting the following information:</p>
		<!-- decloration for p -->
	<div id="container"><!-- decloration for container -->
   <?php

	$firstName = $_POST['firstName'];
	#var name has the value of the element with the name name using the post method
	$age = $_POST['age'];
	#var name has the value of the element with the name age using the post method
	$lastName = $_POST['lastName'];
	#var lastName has the value of lastName
	$houseNumber = $_POST['houseNumber'];
	#var houseNumber has the value of houseNumber
	$street = $_POST['street'];
	#var street has the value of street 
	$townCity = $_POST['townCity'];
	#var street has the value of street 
	$country = $_POST['country'];
	#var country has the value of country 
	$postcode = $_POST['postcode'];
	#var postcode has the value of postcode 
	
	echo 'Forename: ' . $firstName . 
	' <br /> Surname: ' . $lastName . 
	' <br /> Age: ' . $age .
	' <br /> House Number: ' . $houseNumber .
	' <br /> Street: ' . $street .
	' <br /> Town/City: ' . $townCity .
	' <br /> Country: ' . $country .
	' <br /> Postcode: ' . $postcode . '.';
	#print variables collected above in new lines
	echo '<br /> <br /> We will contact you shortly.<hr />';
	#print text 
   ?>
	</div><!-- closing for container -->
	
</body>
</html>