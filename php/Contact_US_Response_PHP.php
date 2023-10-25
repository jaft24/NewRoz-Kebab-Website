<!------------------------------------------------------->
<!-----------CONTACT US FORM RESPOSE PAGE---------------->
<!------------------------------------------------------->




<?php  error_reporting(0);

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $c_Fname = test_input($_POST['c_fname']);
    $c_Email = test_input($_POST['c_email']);
    $c_Phone = test_input($_POST['c_phone']);
    $c_Radio = test_input($_POST['c_radio']);
    $c_Textarea = test_input($_POST['c_textarea']);

}

?>

<html>
    <link rel="styleSheet" href="../css/NRK_CSS.css"> <!--- Provides a link to the Style Sheet --->  
    <title>  NewRoz Kebab Resturant Contact Page</title>       <!--- The title of the website --->
    
<div name = "main">

    <div class = "header">
        <!--- Header Buttons --->
        <button type="button" name = "Home_Button" class = "button" onclick=" "> <a class="a" href="../index.html"> HOME </a> </button>
        <button type="button" name = "Our_Story_Button" class = "button" onclick=" "> <a class="a" href="../pages/Our_Story.html"> OUR STORY </a> </button>
        <button type="button" name = "Reservation_Button" class = "button" onclick=" "> <a class="a" href="../pages/Reservation.html" > RESERVATIONS </a> </button>
              
        <img name = "NRK_logo" class = "NRK_logo"  src="../images/Header_logo.png" alt="NewRoz Kebab Logo Image" width=" " height=" ">
   
        <button type="button" name = "Order_Now_Button" class = "button" onclick=" "> <a class="a" href="../pages/Order_Now.html" > ORDER NOW</a> </button>
        <button type="button" name = "Menu_Button" class = "button" onclick=" "> <a class="a" href="../pages/Menu.html"> MENU </a> </button>
        <button type="button" name = "Contact_Us_Button" class = "button" onclick=" "> <a class="a" href="../pages/Contact_Us.html" > CONTACT US </a> </button>

    </div>


    <!--- Flatpickr --->
    
    <h2 class="contact_header">Contact US</h2>  <br>
    <div class = "contact_form">
    <div class="form" style="opacity: 1.0;">

    <style>
.zoom-in-zoom-out {
  animation: zoom-in-zoom-out 3s ease-out infinite;
  margin-top: 2%;
}

@keyframes zoom-in-zoom-out {
  0% {
    transform: scale(1, 1);
  }
  50% {
    transform: scale(1.4, 1.4);
  }
  100% {
    transform: scale(1, 1);
  }
}
              </style>


<!-- This part when the user inserts the information to the contact page and submit it -->
    <div style="width: 350px; height: 320px; margin: auto; text-align:center; border-radius: 15px; margin-top: -10%;">
                  
                  <p style="text-decoration:none; color:rgb(246, 116, 116);" >
                  <br>   ————————————————
                  <br><img class="zoom-in-zoom-out" src="../images/mail.png" alt="Mail Image" width=100px height=75px> <br><br>
                  Thank you for submitting the contact form <?php echo $c_Fname;?>.<br><br>  
                  We will be back to you in a few business days. Click <a href="../pages/Contact_Us.html" style="color:rgb(246, 116, 116);"> here</a> to go back <br> 
                  ———————————————— <br>
                  <img src="../images/Header_logo.png" alt="Mail Image" width=150px height=75px> <br>
                  The NewRoz Kebab Team          
                  
                  </p> <br><br>
              
                  </div>

</div>

    <div class="form_image">
    <img name = "ConatcUS_image" class = "ConatcUS_image" src="../images/ContactUS_image.png" alt="Contact_Us_image"> 	
    </div> <br> <br>
    
    </div>

<div class="customer_section">

<div class="middle_image">
    <img name = "bottom_logo_image" class = "bottom_logo_image" src="../images/Header_logo.png" alt="Sign_in Rice Image" heihgt = 100px width = 200px > 	
</div>
<!-- Section for important information about the resturant -->
<div>
   
    <p4> 2501 8th St S, <br>     
         Moorhead, MN 56560  </p4>                
</div>

<div>
    <p4> Call us on: (218)-277-5019 </p4>
</div>

<div>
    <p4> Email Address: neweozkebab@gmail.com </p4>
</div>


</div>
<!--This the bottom footer which has the same use as the main div  -->  
<div class="customer_section2">
<p5> <a class="a" href="../index.html"> HOME </a> </p5> <p5 style="font-weight:bold; color:red;">|</p5> 
<p5> <a class="a" href="../pages/Our_Story.html"> OUR STORY </a> </p5> <p5 style="font-weight:bold; color:red;">|</p5> 
<p5> <a class="a" href="../pages/Reservation.html" > RESERVATIONS </a> </p5 style="font-weight:bold; color:red;"> <p5>|</p5> 
<p5> <a class="a" href="../pages/Order_Now.html" > ORDER NOW</a> </p5> <p5 style="font-weight:bold; color:red;">|</p5> 
<p5> <a class="a" href="../pages/Menu.html"> MENU </a> </p5> <p5 style="font-weight:bold; color:red;">|</p5> 
<p5> <a class="a" href="../pages/Contact_Us.html" > CONTACT US </a> </p5>
</div>

 </div>

 <canvas id="contact_left_canva" class="contact_left_canva"> </canvas>
 <canvas id="contact_bottom_canva" class="contact_bottom_canva"> </canvas>
 <canvas id="contact_small_right_canva" class="contact_small_right_canva"> </canvas>
 <canvas id="contact_small_bottom_canva" class="contact_small_bottom_canva"> </canvas>
 
    
 


</html>