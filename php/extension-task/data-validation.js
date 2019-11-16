function validateForm() {
	// GEt references to the form elements
	/////////////////////var id = document.getElementById('dvdId'); 
	//var id has the value of the HTML element dvdId
	var title = document.getElementById('dvdTitle');
	//var title has the value of the HTML element dvdTitle
	var age = document.getElementById('age'); 
	//var age has the value of the HTML element age
	var description = document.getElementById('dvdDesctiption');
	//var description has the value of the HTML element dvdDesctiption
	
	/////////////////////var iderror = 0;
	//var iderror has the value of 0
	var titleerror = 0;
	//var titleerror has the value of 0
	var ageerror = 0;
	//var ageerror has the value of 0
	var descriptionerror = 0;
	//var descriptionerror has the value of 0
	
	/////////////////////var idMessage;
	//creating var idMessage
	var titleMessage;
	//creating var titleMessage
	var ageMessage;
	//creating var ageMessage
	var descriptionMessage;
	//creating var descriptionMessage
	
		/*
			//validate the id
			if (id.value.length == 0){//start if 
			//if id value has a length is 0 do this 
				idMessage = 'Please enter your id';
				//giving the var idMessage a value of this text error message
				iderror = 1;
				//var iderror has the value of 1
			}//end if 

			else{//start else if 
				idMessage = 'Id entered';
				//giving the var idMessage a value of this text error message
				iderror = 0;
				//var error has the value of 0
			}//end else 
		*/
		//validate the title
		if (title.value.length == 0){//start if 
		//if title value has a length is 0 do this 
			titleMessage = 'Please enter the title of the film.';
			//giving the var titleMessage a value of this text error message
			titleerror = 1;
			//var ferror has the value of 1
		}//end if 

		else{//start else if 
			titleMessage = 'Title entered';
			//giving the var titleMessage a value of this text error message
			titleerror = 0;
			//var titleerror has the value of 0
		}//end else

		//validate the age
		if (age.value.length == 0){//start if 
		//if age value has a length is 0 do this 
			ageMessage = 'Please enter the age rating of the film.';
			//giving the var ageMessage a value of this text error message
			ageerror = 1;
			//var ageerror has the value of 1
		}//end if 

		else{//start else if 
			ageMessage = 'Age entered';
			//giving the var fnameMessage a value of this text error message
			ageerror = 0;
			//var ageerror has the value of 0
		}//end else 		
		
		//validate the description
		if (description.value.length == 0){//start if 
		//if fname value has a length is 0 do this 
			descriptionMessage = 'Please enter the description of the film.';
			//giving the var descriptionMessage a value of this text error message
			descriptionerror = 1;
			//var descriptionerror has the value of 1
		}//end if 

		else{//start else if 
			descriptionMessage = 'Description entered';
			//giving the var descriptionMessage a value of this text error message
			descriptionerror = 0;
			//var descriptionerror has the value of 0
		}//end else 

			//validation errors////////////////////////////////////////////////////
			
			if (/*(iderror == 1) ||*/ (titleerror == 1) || (ageerror == 1) || (descriptionerror == 1)) {
				//is there an error. if so do this:
				alert('Form Submission Error: ' + /* '\n\t' + /*idMessage +*/ '\n\t' + titleMessage + '\n\t' + ageMessage + '\n\t' + descriptionMessage);
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