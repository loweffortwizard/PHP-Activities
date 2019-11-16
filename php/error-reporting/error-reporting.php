<!DOCTYPE html>
<html>

<head>

	<title>Error Reporting</title>

</head>
<body>
		
	<?php
		
		ini_set('display_errors', 0 || false);
		#do not display errors to user
		
		/*
			display_errors: This determines whether errors should be printed to the screen as part of the output or if they should be hidden from the user.
		*/
		
		ini_set('log_errors', 1 || true);
		#recoring error made
		#The ini_set(‘log_errors’) either turns of the writing of error logs by adding 0, or turn on error log writing using 1.
		/*
			log_errors: Tells whether script error messages should be logged to the server's error log or error_log. This option is thus server-specific
			
			Boolean 
		*/
		
		ini_set('error_reporting', E_ALL);
		#reporting all errors
		
		ini_set('error_log', 'error-testing');
		#saving error as textfile
		/*
			error_log: Name of the file where script errors should be logged. 
			The file should be writable by the web server's user. 
			If the special value syslog is used, the errors are sent to the system logger instead. 
			
			string
		*/
		
		#ini_set = Sets the value of a configuration option 
		
		$firstName = "Jeff";
		$lastName = "Jones";
		#var has the value of text content
		
		#no error
		echo 'Hello ' . $firstName . ' ' .  $lastNam . ' welome. ';
		#print out above
		
		echo '<br>';
		
		#ERROR here
		echo 'Hello ' . $firstNam . ' welome. ';
		#print out above
		
		/*
		There is a merit level task in the next assignment that requires you to include an error log for a web application and explain the
		benefits of using a log file, rather than use on screen error reporting.
		 Give your error log a sensible name (don’t call it marks-error-log).
		*/
		
	?>
	
		
</body>
</html>