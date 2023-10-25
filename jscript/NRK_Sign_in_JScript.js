/* ------------------------------------------------------*/
/* ---------------------SIgn In ---------------------*/
/* ----------------------------------------------------*/

const sinform = document.getElementById('sign_in_form');
const sinusername = document.getElementById('sin_username');
const sinpassword = document.getElementById('sin_password');



sinform.addEventListener('submit', e => {
   
    if (sinusername.value !='' && sinpassword.value !='') {     
        e.submit(); 
    } 
    else {
        e.preventDefault();
        checkSignInInputs();
        
    }
    
    });
    
    // Form Input Validation Function
    function checkSignInInputs() {
    
        // trim to remove the whitespaces
        const sinusernameValue = sinusername.value;
        const sinpasswordValue = sinpassword.value;
        
        // Declare Arrays so it will be easier to loop through errors
        const Values = [sinusernameValue, sinpasswordValue];
        const Initials = [sinusername, sinpassword];
        const Messages = ["Username ", "Password "];
    
        // This is the loop to verify the null and formatting errors
        for(var i=0;i<2;i++) {
        if(Values[i] === '') {
            setSignInErrorFor(Initials[i], Messages[i] + 'is required');
        } 
        else {   
        setSignInSuccessFor(Initials[i]);
        }
      }
    }

function setSignInErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'signin_sections error';
	small.innerText = message;
}




// Function that takes a value and normalizes the border color
function setSignInSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'signin_sections success';
}