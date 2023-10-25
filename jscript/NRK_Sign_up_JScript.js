/* This is the JScript page (sources and acknowledgment found in the main HTML page) */

/* ------------------------------------------------------*/
/* ---------------------Contact US----------------------*/
/* ----------------------------------------------------*/


// We get the variables from the input by their ids
const supform = document.getElementById('sign_up_form');
const supusername = document.getElementById('sup_username');
const supemail = document.getElementById('sup_email');
const suppassword = document.getElementById('sup_password');



// Picks up on the submitting action from a form and if they all pass the validation test and are not null the form will submit
// However is the values dont pass the validation tests cancel the submit and report which values are invalid to the user. 
supform.addEventListener('submit', e => {
   
if (supusername.value !='' && supemail.value !='' && suppassword.value !='' && isValidEmail(supemail.value) && isValidPassword(suppassword.value)) {     
    e.submit(); 
} 
else {
    e.preventDefault();
    checkSignUpInputs();
}

});

// Form Input Validation Function
function checkSignUpInputs() {

    // trim to remove the whitespaces
	const supusernameValue = supusername.value.trim();
	const supemailValue = supemail.value.trim();
	const suppasswordValue = suppassword.value;
	
    // Declare Arrays so it will be easier to loop through errors
    const Values = [supusernameValue, supemailValue, suppasswordValue];
    const Initials = [supusername, supemail, suppassword];
    const Messages = ["Username ", "Email ","New password "];

    // This is the loop to verify the null and formatting errors
    for(var i=0;i<3;i++) {
    if(Values[i] === '') {
		setErrorFor(Initials[i], Messages[i] + 'is required');
	} 
    else {
    setSuccessFor(Initials[i]);
    }
    if (Values[1]!='') {
        if (!isValidEmail(Values[1])) {
	 	setErrorFor(Initials[1], 'This is not a valid ' +  Messages[1]);
     } else {
	 	setSuccessFor(Initials[1]);
	 }
    }
    if (Values[2]!='') {
        if (!isValidPassword(Values[2])) {
	 	setErrorFor(Initials[2], 'Please use a stronger password');
     } else {
	 	setSuccessFor(Initials[2]);
	 } 
    }
  }
}

     

// Function that states error messages for the respective inputs by adding to the class of a required section
// This will send a message and border the input boxes red
function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'signup_sections error';
	small.innerText = message;
}

// Function that takes a value and normalizes the border color
function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'signup_sections success';
}

// Function that verifies the email using REGEX
function isValidEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}

// Function that verifies the phone number using REGEX
function isValidPassword(suppassword) {
    return /^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*\W)(?!.* ).{8,16}$/.test(suppassword);
}

