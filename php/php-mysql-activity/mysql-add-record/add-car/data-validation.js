function validateForm() {
	// GEt references to the form elements
	var name = document.getElementById('name'); 
	//var fname has the value of the HTML element fname
	var colour = document.getElementById('colour');
	//var fname has the value of the HTML element sname
	var type = document.getElementById('type'); 
	//var uname has the value of the HTML element uname
	
	var nameerror = 0;
	//var ferror has the value of 0
	var colourerror = 0;
	//var serror has the value of 0
	var typeerror = 0;
	//var uerror has the value of 0
	
	var nameMessage;
	//creating var fnameMessage
	var colourMessage;
	//creating var snameMessage
	var typeMessage;
	//creating var fnameMessage
	
	//validate the name
	if (name.value.length == 0){//start if 
	//if name value has a length is 0 do this 
		nameMessage = 'Please enter the name';
		//giving the var nameMessage a value of this text error message
		nameerror = 1;
		//var nameerror has the value of 1
	}//end if 

	else{//start else if 
		nameMessage = 'Name entered correctly';
		//giving the var nameMessage a value of this text error message
		nameerror = 0;
		//var error has the value of 0
	}//end else 
		
	//validate the colour
	if (colour.value.length == 0){//start if 
	//if colour value has a length is 0 do this 
		colourMessage = 'Please enter your colour';
		//giving the var fnameMessage a value of this text error message
		colourerror = 1;
		//var colour has the value of 1
	}//end if 

	else{//start else if 
		colourMessage = 'Colour entered correctly';
		//giving the var fnameMessage a value of this text error message
		colourerror = 0;
		//var error has the value of 0
	}//end else

	//validate the age
	if (type.value.length == 0){//start if 
	//if type value has a length is 0 do this 
		typeMessage = 'Please enter your type';
		//giving the var typeMessage a value of this text error message
		typeerror = 1;
		//var typeerror has the value of 1
	}//end if 
	
	else{//start else if 
		typeMessage = 'Type entered correctly';
		//giving the var typeMessage a value of this text error message
		typeerror = 0;
		//var typeerror has the value of 0
	}//end else 
		
	//validation errors////////////////////////////////////////////////////
	
	if ((nameerror == 1) || (colourerror == 1) || (typeerror == 1)) {
		//is there an error in the nameerror, colourerror or typeerror. if so do this
		alert('Form Error: ' + '\n\t' + nameMessage + '\n\t' + colourMessage + '\n\t' + typeMessage + '\n\t' + ' Please try again.');
		//chrome does not tab the message but IE does
		//create an alert to the user with new lines
		return false;
		//if the button was clicked, do not go to another page (stay here)
	}
	else{//start else
	//if there is no errors do this 
		return true;
		//if there is no errors let the submit button work an go to next page
	}//end else
}

//creating init function to run my function when a html element is left mouse clicked. 
function init() {
	document.getElementById('myForm').onsubmit = validateForm;
	//when the HTML document is LMC, run validateForm
} // End of init function

// Assign an event handler to the window's load event.
window.onload = init;
//on browser load run init