/* ------------------------------------------------------*/
/* ---------------------Reservation---------------------*/
/* ----------------------------------------------------*/

const rform = document.getElementById('reservation_form'); 
const rname = document.getElementById('res_name');
const rdate = document.getElementById('res_date');
const rtime = document.getElementById('res_time');
const numpeople = document.getElementById('num_people');


rform.addEventListener('submit', e => {
   
    if (rname.value !='' && rdate.value !='' && rtime.value !='' && numpeople.value !='') {     
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
        const rnameValue = rname.value;
        const rdateValue = rdate.value;
        const rtimeValue = rtime.value;
        const numpeopleValue = numpeople.value;
        
        // Declare Arrays so it will be easier to loop through errors
        const Values = [rnameValue, rdateValue, rtimeValue, numpeopleValue];
        const Initials = [rname, rdate, rtime, numpeople];
        const Messages = ["Your name ", "The date ", "The time ","People "];
    
        // This is the loop to verify the null and formatting errors
        for(var i=0;i<4;i++) {
        if(Values[i] === '') {
            setReservationErrorFor(Initials[i], Messages[i] + 'cannot be blank');
            const element = document.querySelector('.people_form_control');
            element.style.border = '1px solid red';
        } 
        else {   
        setReservationSuccessFor(Initials[i]);
        }
      }
    }

function setReservationErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'reservation_sections error';
	small.innerText = message;
}


// Function that takes a value and normalizes the border color
function setReservationSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'reservation_sections success';
}