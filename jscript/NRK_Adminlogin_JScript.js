/* ------------------------------------------------------*/
/* ---------------------Admin Login---------------------*/
/* ----------------------------------------------------*/

const aform = document.getElementById('adminlogin_form');
const ainput = document.getElementById('admin_input');
const apassword = document.getElementById('admin_password');



aform.addEventListener('submit', e => {
   
    if (ainput.value !='' && apassword.value !='') {     
        e.submit(); 
    } 
    else {
        e.preventDefault();
        checkReservationInputs();
        
    }
    
    });
    
    // Form Input Validation Function
    function checkReservationInputs() {
    
        // trim to remove the whitespaces
        const ainputValue = ainput.value;
        const apasswordValue = apassword.value;
        
        // Declare Arrays so it will be easier to loop through errors
        const Values = [ainputValue, apasswordValue];
        const Initials = [ainput, apassword];
        const Messages = ["Username ", "Password "];
    
        // This is the loop to verify the null and formatting errors
        for(var i=0;i<2;i++) {
        if(Values[i] === '') {
            setAdminloginErrorFor(Initials[i], Messages[i] + 'is required');
        } 
        else {   
        setAdminloginSuccessFor(Initials[i]);
        }
      }
    }

function setAdminloginErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'reservation_sections error';
	small.innerText = message;
}




// Function that takes a value and normalizes the border color
function setAdminloginSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'reservation_sections success';
}