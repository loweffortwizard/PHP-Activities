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
  
    echo 'Hello, ' . $fullName . ' welcome back.';
	#print text hello (. - means add like + in JavaScript) the var fillName and the text 'welcome back.'
  ?>
  
  <!-- 
	•	To load a php web page you must open it through the web server – type the address into the web browser address bar.
•	PHP web pages use a .php file extension not .html
•	Use whitespace and comments to make your code easier to read and manage – especially for coursework code.
•	Comments in HTML and PHP use different notation, make sure you use the correct method when commenting code.
•	Don’t forget to end every PHP statement with a semi-colon (;).

  -->

</body>
</html>
