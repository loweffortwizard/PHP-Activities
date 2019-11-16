<!DOCTYPE html>
<html>
<head>
	<title>loaded</title>
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
		
		if (move_uploaded_file ($_FILES['the_file']['tmp_name'], "./upload/" . $_FILES['the_file']['name'])){
			#if there is a file that can be loaded do this: -- after comma is the file directory -- ./ = one folder -- ../ back one folder
			
			//move_uploaded_file
			#The move_uploaded_file() function moves an uploaded file to a new location.
			#This function returns TRUE on success, or FALSE on failure.
			
			echo '<p> Your file was uploaded.</p>';
			#print content above
			
		} //end if 
		
		else{
			#if there is none or a problem, do this:
			
			echo '<p> Your file was not uploaded.</p>';
			#print content above
			
		}//end else
			
		/*
		Points to remember:
			•	When creating a form to upload files you must include the enctype="multipart/form-data"
			•	A form for uploading files must always use the POST method.
			•	The move_uploaded_file function is used to upload files and requires two pieces of information:
				o	The name of the file (taken from the form):
						$_FILES['the_file']['tmp_name']
				o	The destination for the file:
						"./uploads/" . $_FILES['the_file']['name']
			•	You must make a folder on the web server to store uploaded files to, in our example we named it uploads.
				o	In a professional situation you would create the upload folder outside of the web root folder for security reasons.
			•	The hidden form input informs the browser how large a file to be uploaded can be (in bytes). 
		*/
	?>
</body>
</html>