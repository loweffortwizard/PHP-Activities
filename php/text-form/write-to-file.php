<!DOCTYPE html>
<html>
<head>
	<title>Add Text</title>
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
	//file_put_contents
	#The file_put_contents() writes a string to a file.
	
	//PHP_EOL
	#You use PHP_EOL when you want a new line, and you want to be cross-platform.
	
	//FILE_APPEND
	#If file filename already exists, append the data to the file instead of overwriting it.
	
		#identify file location
		$file = './MyTextFile.txt';
		#var file has the value of './MyTextFile.txt' -- this is also the directory for the file to be saved
		$text = $_POST['text-to-write'];
		#var text has the value of what ever was in the post method in the HTML
		
		file_put_contents($file, $text. PHP_EOL, FILE_APPEND ); //WRITE THE DATA
		#using funtion file_put_contents to put the contents of var file and var text in  the file being made
		
	#
		//PHP_EOL will override the content of the file each time a new one is made
		//without PHP_EOL will create new line for the content created and save it on that new line
	#
		
		echo '<p>Your text has been sent.</p>';
		#print the content above in the PHP HTML
		
		/*
		Points to remember:
			•	The file_put_contents() function is used to write to a text file (it only works with PHP version 5 or higher).
			•	If the text file you specify does not exist, the file_put_contents() function will create it.
			•	The PHP_EOL parameter ensures that each time the form is run, new entries are written to a new line in the text file.
			•	The FILE_APPEND parameter adds new text to the end of the existing file content.
		*/
	?>
</body>
</html>