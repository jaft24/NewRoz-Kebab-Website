<!-------------------------------------------------->
<!---------------------RESERVATION------------------>
<!-------------------------------------------------->



<?php  error_reporting(0);  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $r_Fname = test_input($_POST['r_fname']);
}
?>
<html>
    <head>

        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="styleSheet" href="../css/NRK_CSS.css"> <!--- Provides a link to the Style Sheet ---> 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css"> 
        <title>  NewRoz Kebab Resturant Reservation </title>       <!--- The title of the website --->
    <!-- Header div -->
    <div name = "main">

        <div class = "header">
            <!--- Header Buttons --->
            <button type="button" name = "Home_Button" class = "button" onclick=" "> <a class="a" href="../index.php"> HOME </a> </button>
            <button type="button" name = "Our_Story_Button" class = "button" onclick=" "> <a class="a" href="../pages/Our_Story.html"> OUR STORY </a> </button>
            <button type="button" name = "Reservation_Button" class = "button" onclick=" "> <a class="a" href="../pages/Reservation.php" > RESERVATIONS </a> </button>
                  
            <img name = "NRK_logo" class = "NRK_logo"  src="../images/Header_logo.png" alt="NewRoz Kebab Logo Image" width=" " height=" ">
       
            <button type="button" name = "Order_Now_Button" class = "button" onclick=" "> <a class="a" href="../pages/Order_Now.php" > ORDER NOW</a> </button>
            <button type="button" name = "Menu_Button" class = "button" onclick=" "> <a class="a" href="../pages/Menu.html"> MENU </a> </button>
            <button type="button" name = "Contact_Us_Button" class = "button" onclick=" "> <a class="a" href="../pages/Contact_Us.php" > CONTACT US </a> </button>
    
        </div>
       
    </head>

    <body>
  
<div class="Reservation_page_body">  
<!-- The Opening Hours for the restaurant -->
<div class = "reservation_section_left">
                <img name = "Sarbest_image" class = "inside_image" src="../images/Inside_NRK.jpg" alt="Tables Image"> <br> <br> <br>
                <h2 style="margin-left: 10%;"> <span class = "spaner" style="color :red;">O</span><span style="color :black;">pen</span>
                     <span class = "spaner" style="color :red;">H</span><span style="color :black;">ours</span> </h2> <br>
                <p style="font-weight: bold; margin-left: 10%;">Monday - Saturday</p>
                <p style="font-style: italic; margin-left: 10.5%;">11AM - 9PM</p>
                <p style="font-weight: bold; margin-left: 10%;">Sunday</p>
                <p style="font-style: italic; margin-left: 10.5%;">Closed</p> 
</div> 
        

<div class = "reservation_section_middle"> 
    <h2><span class = "spaner" style="color :red;">M</span><span style="color :black;">ake a </span>
        <span class = "spaner" style="color :red;">R</span><span style="color :black;">eservation</span></h2> <br>


        <div class="reservtaion_form" id="res_form_2" style="opacity: 1.0; display: none; ">
           

            <style>

.c{
text-decoration: none;
color:rgb(246, 116, 116);
}
.d:hover {
transform: scale(1.05);
}

.zoom-in-zoom-out {
animation: zoom-in-zoom-out 3s ease-out infinite;
margin-top: 3%;
margin-bottom: 3%;
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
            <body>
  
            <div style="width: 225px; height: 360px; margin-top: -10%; text-align:center; border-radius: 15px;">
            <br> <h3 style="color:red; margin-top:1%;"> You are all set <?php echo $r_Fname;?> !</h3>
            <p style="text-decoration:none; color:rgb(246, 116, 116);">
               ————————————
            <br><img class="zoom-in-zoom-out" src="../images/reservecalendar.png" alt="Mail Image" width=100px height=95px>  <br>
            Please insert your phone <br> number for a text reminder: <br> <br> 
            <input style="margin-top: -2%;" id="add_phone" class="form_control" type="tel" placeholder="+1 (_ _ _) _ _ _  _ _ _ _"> <br> <br> <br> <input onclick="myFunction()" class="find_a_table" id="phone_button" type="submit"> <br><br>
          
            
            </p>
        
            </div> 
  
         
          </div>  
<!-- Below are sections of div which are reponisble for creating a reservation table -->
   <div class="reservtaion_form" id="reservation_response">
    <form id="reservation_form" name = "reservation_form" method="POST" action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF "]);?>">

    <div class="reservation_sections" style="margin-top:-5%;">
    <input type="text"  class ="form_control" placeholder="Full Name" name="r_fname" id="res_name"> <br> <br>
    <small>Error message</small> <br> 
    </div>    

    <div class="reservation_sections">    
    <input class="form_control" type="date" name="r_date" id="res_date"> <br> <br>
    <small> Error Message </small> <br>
    </div>
    <div class="reservation_sections">
    <input class="form_control" type="time" id="res_time" name="r_time" min="09:00" max="18:00"> <br> <br>
    <small> Error Message </small> <br>
    </div>
    <div class="reservation_sections"> 
    <select name="r_people" id="num_people" class="people_form_control">
    <option value=''>Number of People</option>
    <option value="1">1 Person</option>
    <option value="2">2 People</option>
    <option value="3">3 People</option>
    <option value="4">4 People</option>
    <option value="5">5 People</option>
    <option value="6">6 People</option>
    <option value="7">7 People</option>
    <option value=" ">If 8 or more please call us</option> </select> <br> <br>
    <small> Error Message </small> <br>
    </div>
    <input class="find_a_table" type="submit" value=" FIND A TABLE ">

    <script src="../jscript/NRK_Res_JScript.js"> </script>
    <script> 
    function myFunction() {
        document.getElementById("add_phone").style.visibility = "hidden";
        document.getElementById("phone_button").style.visibility = "hidden";

    }
    </script> 
    </form>
    </div>
    </div>





    <div class = "reservation_section_right">
        <h2 style="margin-left: 10%;"> <span class = "spaner" style="color :red;">A</span><span style="color :black;">ddress</span></h2> <br>
        <p style="font-style: italic; margin-left: 10%;"> 2501 8th St S, </p>
        <p style="font-style: italic; margin-left: 10%;"> Moorhead, MN 56560 </p>
        <p style="font-style: italic; margin-left: 10%;"> 218 - 218 - 2182 </p> <br><br>
        <h2 style="margin-left: 10%; margin-bottom: 2%;"> <span class = "spaner" style="color :red;">F</span><span style="color :black;">ind</span>
             <span class = "spaner" style="color :red;">U</span><span style="color :black;">s</span> </h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2728.618563660379!2d-96.77203708451964!3d46.851198279141855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x52c8cfdcd6475a69%3A0xcdb5374014c357f6!2sNewroz%20Kebab!5e0!3m2!1sen!2sus!4v1668899848325!5m2!1sen!2sus" class="NRK_map" allowfullscreen="" referrerpolicy="no-referrer-when-downgrade"></iframe> 
       </div>

</div>



<!--Below is the php that is responsible for taking information when the user or costumer enters information -->
<?php  error_reporting(0);

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $r_Fname = test_input($_POST['r_fname']);
    $r_Date = test_input($_POST['r_date']);
    $r_Time = test_input($_POST['r_time']);
    $r_People = test_input($_POST['r_people']);

   
    echo '<script type="text/JavaScript">
    document.getElementById("reservation_response").style.display = "none";
    document.getElementById("res_form_2").style.display = "block";
    </script>';


  }

?>


        <!-- Section for important information about the resturant -->
        <div class="customer_section">

            <div class="middle_image">
                <img name = "bottom_logo_image" class = "bottom_logo_image" src="../images/Header_logo.png" alt="Sign_in Rice Image" heihgt = 100px width = 200px > 	
            </div>
            
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
                <p5> <a class="a" href="../index.php"> HOME </a> </p5> <p5 style="font-weight:bold; color:red;">|</p5> 
                <p5> <a class="a" href="../pages/Our_Story.html"> OUR STORY </a> </p5> <p5 style="font-weight:bold; color:red;">|</p5> 
                <p5> <a class="a" href="../pages/Reservation.php" > RESERVATIONS </a> </p5 style="font-weight:bold; color:red;"> <p5>|</p5> 
                <p5> <a class="a" href="../pages/Order_Now.php" > ORDER NOW</a> </p5> <p5 style="font-weight:bold; color:red;">|</p5> 
                <p5> <a class="a" href="../pages/Menu.html"> MENU </a> </p5> <p5 style="font-weight:bold; color:red;">|</p5> 
                <p5> <a class="a" href="../pages/Contact_Us.php" > CONTACT US </a> </p5>
            </div>


            <canvas id="reservation_left_image_canva" class="reservation_left_image_canva"> </canvas>
            <canvas id="reservation_right_image_canva" class="reservation_right_image_canva"> </canvas>
            <canvas id="reservation_top_image_canva" class="reservation_top_image_canva"> </canvas>
            <canvas id="reservation_middle_canva" class="reservation_middle_canva"> </canvas>
            <canvas id="reservation_right_canva" class="reservation_right_canva"> </canvas>
            <canvas id="reservation_bottom_canva" class="reservation_bottom_canva"> </canvas>

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script> flatpickr("#input[type=datetime-local]", {}); </script>

   </body>

</html>