<!DOCTYPE html>
<html>
<head>

	<title>PHP Variables</title>

</head>
<body>

	<!-- 	A variable’s name must start with a dollar sign ($), for example, $firstName.
	
	The variable’s name can contain a combination of letters, numbers and the underscore, for example, $my_report1.
	
	The first character after the dollar sign must be a letter or an underscore (it cannot be a number).
	
	Variable names are case-sensitive. This means the $name and $Name are entirely different variables.
	-->

  <?php
    $firstName = 'Jeff';
	#var firstName has the value of Jeff
    $lastName = 'Jones';
	#var lastName has the value of Jones
    $fullName = $firstName . ' ' . $lastName;
	#var fullName has the value of firstName and lastName
  
    echo '<p>Hello, <strong>' . $fullName . '</strong> welcome 
	    back.<br />It is good to see you again.</p>';
	#print in a p tag Hellow with in bold the var fullName, with more welcoming text
  ?>

  <!-- 
	•	PHP is case-sensitive, so make sure that you give variables sensible names and check their spelling if a variable does not seem to be working.
•	Use a dot (.) to join variables into strings.
•	Think back to unit 20 – when writing modern HTML try to make write all elements in lowercase and close open tags where required, for example <br />.
•	Use whitespace and comments to make your code easier to read and manage – especially for coursework code.
•	Don’t forget to end every PHP statement with a semi-colon (;).

  -->
  
</body>
</html>
