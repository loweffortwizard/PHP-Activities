<!DOCTYPE html>
<html>
<head>

   <title>Details Accepted</title>

</head>
<body>

   <p>Thank you for submitting the following information:</p>
	
   <?php

	$name = $_POST['name'];
	#var name has the value of the element with the name name using the post method
	$age = $_POST['age'];
	#var name has the value of the element with the name age using the post method
		
	echo 'Name = ' . $name . ' and Age = ' . $age . '.';
	#print variables name and age 
	echo '<br />Have a good day.<hr />';
	#print text 
   ?>
	
</body>
</html>
