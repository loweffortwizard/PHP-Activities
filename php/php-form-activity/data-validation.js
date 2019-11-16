function validateForm() {
	// GEt references to the form elements
	var fName = document.getElementById('fname'); 
	//var fname has the value of the HTML element fname
	var lName = document.getElementById('lName');
	//var fname has the value of the HTML element sname
	var age = document.getElementById('age'); 
	//var uname has the value of the HTML element uname
	var houseNum = document.getElementById('hNum');
	//var password has the value of the HTML element password
	var street = document.getElementById('street'); 
	//var uname has the value of the HTML element uname
	var townCity = document.getElementById('townCity');
	//var password has the value of the HTML element password
	var count = document.getElementById('count'); 
	//var uname has the value of the HTML element uname
	var postcode = document.getElementById('pC');
	//var password has the value of the HTML element password
	
	var ferror = 0;
	//var ferror has the value of 0
	var lerror = 0;
	//var serror has the value of 0
	var aerror = 0;
	//var uerror has the value of 0
	var houseerror = 0;
	//var passerror has the value of 0
	var tcerror = 0;
	//var passerror has the value of 0
	var streeterror = 0;
	//var passerror has the value of 0
	var counterror = 0;
	//var passerror has the value of 0
	var posterror = 0;
	//var passerror has the value of 0
	
	var fnameMessage;
	//creating var fnameMessage
	var lnameMessage;
	//creating var snameMessage
	var ageMessage;
	//creating var fnameMessage
	var houseMessage;
	//creating var snameMessage
	var streetMessage;
	//creating var fnameMessage
	var tcMessage;
	//creating var snameMessage
	var countMessage;
	//creating var fnameMessage
	var postMessage;
	//creating var snameMessage
	
	//validate the first name
	if (fName.value.length == 0){//start if 
	//if fname value has a length is 0 do this 
		fnameMessage = 'Please enter your forename';
		//giving the var fnameMessage a value of this text error message
		ferror = 1;
		//var ferror has the value of 1
	}//end if 

	else{//start else if 
		fnameMessage = 'First name entered correctly';
		//giving the var fnameMessage a value of this text error message
		ferror = 0;
		//var error has the value of 0
	}//end else 
		
	//validate the last name
	if (lName.value.length == 0){//start if 
	//if fname value has a length is 0 do this 
		lnameMessage = 'Please enter your last name';
		//giving the var fnameMessage a value of this text error message
		lerror = 1;
		//var ferror has the value of 1
	}//end if 

	else{//start else if 
		lnameMessage = 'Last name entered correctly';
		//giving the var fnameMessage a value of this text error message
		lerror = 0;
		//var error has the value of 0
	}//end else 
	
	//validate the age
	if (age.value.length == 0){//start if 
	//if fname value has a length is 0 do this 
		ageMessage = 'Please enter your age';
		//giving the var fnameMessage a value of this text error message
		aerror = 1;
		//var ferror has the value of 1
	}//end if 

	else{//start else if 
		ageMessage = 'Age entered correctly';
		//giving the var fnameMessage a value of this text error message
		aerror = 0;
		//var error has the value of 0
	}//end else 
	
	//validate the house
	if (houseNum.value.length == 0){//start if 
	//if fname value has a length is 0 do this 
		houseMessage = 'Please enter your house number';
		//giving the var fnameMessage a value of this text error message
		houseerror = 1;
		//var ferror has the value of 1
	}//end if 

	else{//start else if 
		houseMessage = 'House number entered correctly';
		//giving the var fnameMessage a value of this text error message
		houseerror = 0;
		//var error has the value of 0
	}//end else 
		
	//validate the street
	if (street.value.length == 0){//start if 
	//if fname value has a length is 0 do this 
		streetMessage = 'Please enter your streer number';
		//giving the var fnameMessage a value of this text error message
		streeterror = 1;
		//var ferror has the value of 1
	}//end if 

	else{//start else if 
		streetMessage = 'Street number entered correctly';
		//giving the var fnameMessage a value of this text error message
		streeterror = 0;
		//var error has the value of 0
	}//end else
		
	//validate the town/city
	if (tC.value.length == 0){//start if 
	//if fname value has a length is 0 do this 
		tcMessage = 'Please enter your town/city';
		//giving the var fnameMessage a value of this text error message
		tcerror = 1;
		//var ferror has the value of 1
	}//end if 

	else{//start else if 
		tcMessage = 'Town/city entered correctly';
		//giving the var fnameMessage a value of this text error message
		tcerror = 0;
		//var error has the value of 0
	}//end else
		
	//validate the count
	if (count.value.length == 0){//start if 
	//if fname value has a length is 0 do this 
		countMessage = 'Please enter your country';
		//giving the var fnameMessage a value of this text error message
		counterror = 1;
		//var ferror has the value of 1
	}//end if 

	else{//start else if 
		countMessage = 'Country entered correctly';
		//giving the var fnameMessage a value of this text error message
		counterror = 0;
		//var error has the value of 0
	}//end else
		
	//validate the postcode
	if (post.value.length == 0){//start if 
	//if fname value has a length is 0 do this 
		postMessage = 'Please enter your postcode';
		//giving the var fnameMessage a value of this text error message
		posterror = 1;
		//var ferror has the value of 1
	}//end if 

	else{//start else if 
		postMessage = 'Postcode entered correctly';
		//giving the var fnameMessage a value of this text error message
		posterror = 0;
		//var error has the value of 0
	}//end else
	
	//validation errors////////////////////////////////////////////////////
	
	if ((ferror == 1) || (lerror == 1)
		|| (aerror == 1) || (houseerror == 1) || (streeterror == 1) 
		|| (townerror == 1) || (counterror == 1) || (posterror == 1)) {
		//is there an error in the sname or fname. if so do this
		alert('Form Error: ' + '\n\t' + fnameMessage + '\n\t' + lnameMessage
		+ '\n\t' + ageMessage + '\n\t' + houseMessage + '\n\t' + streetMessage
		+ '\n\t' + tcMessage + '\n\t' + countMessage + '\n\t' + postMessage);
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
	document.getElementById('submission').onclick = validateForm;
	//when the HTML document is LMC, run validateForm
} // End of init function

// Assign an event handler to the window's load event.
window.onload = init;
//on browser load run init