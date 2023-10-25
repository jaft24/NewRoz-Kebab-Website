/* ------------------------------------------------------*/
/* ---------------------Order Now---------------------*/
/* ----------------------------------------------------*/

const oform = document.getElementById('order_form');
const odate = document.getElementById('order_date');
const otime = document.getElementById('order_time');
const oaddress = document.getElementById('order_address');


oform.addEventListener('submit', e => {
   
    if (odate.value !='' && otime.value !='' && oaddress.value !='') {     
        e.submit(); 
    } 
    else {
        e.preventDefault();
        checkOrderInputs();   
    }
    
    });
    
    // Form Input Validation Function
    function checkOrderInputs() {
    
        // trim to remove the whitespaces
        const odateValue = odate.value;
        const otimeValue = otime.value;
        const oaddressValue = oaddress.value;
        
        // Declare Arrays so it will be easier to loop through errors
        const Values = [odateValue, otimeValue, oaddressValue];
        const Initials = [odate, otime, oaddress];
        const Messages = ["The date ", "The time ","Customer Address "];
    
        // This is the loop to verify the null and formatting errors
        for(var i=0;i<3;i++) {
        if(Values[i] === '') {
            setOrderErrorFor(Initials[i], Messages[i] + 'is required');
            const element = document.querySelector('.time');
            element.style.border = '1px solid red';
            
        } 
        else {   
        setOrderSuccessFor(Initials[i]);
        }
      }
    }

function setOrderErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'order_section error';
	small.innerText = message;
}




// Function that takes a value and normalizes the border color
function setOrderSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'order_section success';
}

