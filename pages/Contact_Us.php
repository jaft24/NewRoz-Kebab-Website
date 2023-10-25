<!---------------------------------------------------->
<!-----------------------Contact Us------------------->
<!---------------------------------------------------->


<?php  error_reporting(0);  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $c_Fname = test_input($_POST['c_fname']);
}
?>

<html>

<body> 

<script>
        function ScrollOnLoad(){
        window.scrollTo(0, 50);
        }
</script>

    <link rel="styleSheet" href="../css/NRK_CSS.css"> <!--- Provides a link to the Style Sheet --->  
    <title>  NewRoz Kebab Resturant Contact Page</title>       <!--- The title of the website --->
    
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


    <!--- Flatpickr --->
    
    <h2 class="contact_header">Contact US</h2>  <br>
    <div class = "contact_form">

    

      <div class="form" id="form_2" style="opacity: 1.0; display: none; ">
 
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
    
    <!-- This is the html styled and appears when the user inserts the information and submit it -->
    
        <div style="width: 350px; height: 320px; margin: auto; text-align:center; border-radius: 15px; margin-top: -10%;">
                      
                      <p style="text-decoration:none; color:rgb(246, 116, 116);" >
                      <br> ————————————————
                      <br><img class="zoom-in-zoom-out" src="../images/mail.png" alt="Mail Image" width=100px height=75px> <br><br>
                      Thank you for submitting the contact form <?php echo $c_Fname;?>.<br><br>  
                      We will be back to you in a few business days. Click <a href="../pages/Contact_Us.php" style="color:rgb(246, 116, 116);"> here</a> to go back <br> 
                      ———————————————— <br>
                      <img src="../images/Header_logo.png" alt="Mail Image" width=150px height=75px> <br>
                      The NewRoz Kebab Team          
                      
                      </p> <br><br>
                  
                      </div>
    
    </div>


    <!-- This is the contact us page which the user inserts informations which helps the owner reach back to them -->
    <div class="form" id="contact_response">

    <form id="contact_form" name = "form" method="POST" action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF "]);?>"><br>
        
    <div class="contact_sections">
    <input type="text"  class ="form_input" placeholder="Full Name" name="c_fname" id="fname"> 
    &nbsp; <small>Error message</small> <br> <br>
    </div>

    <div class="contact_sections">
    <input type="email" class ="form_input" placeholder="Email" name="c_email" id="email"> 
    &nbsp; <small>Error message</small> <br> <br>
    </div>

    <div class="contact_sections">
    <input type="phone" class ="form_input" placeholder="Phone Number" name="c_phone" id="pnumber">
    &nbsp; <small>Error message</small> <br> <br> <br>
    </div>

    <label> Are you a previous customer? </label> <br> <br>
    <input type="radio" class="radio" name = "c_radio" value="Yes"> Yes &nbsp;
    <input type="radio" class="radio" name = "c_radio" value="No"> No </br><br>

    <textarea id="textarea" name="c_textarea" class="textarea" placeholder="Enter your Message" oninput="update(this.value);"></textarea> <br><br>
    
    <input class="submit_button" type="submit" value="Submit" name="submit"> <br><br>
    
    <script src="../jscript/NRK_JScript.js"> </script>

    </form>

</div>

    <div class="form_image">
    <img name = "ConatcUS_image" class = "ConatcUS_image" src="../images/ContactUS_image.png" alt="Contact_Us_image"> 	
    </div> <br> <br>
    
    </div>

    <!-- This is the php part which is used to accept the informations and sends to the sql inorder to be stored -->
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



echo '<script type="text/JavaScript">
document.getElementById("contact_response").style.display = "none";
document.getElementById("form_2").style.display = "block";
</script>';
    

    //Database Connection 
  
  $server_name = "localhost";
  $location = "root";
  $password = "ChromeBook=2019";
  $db_name = "newroz_kebab";

  $conn = mysqli_connect($server_name, $location, $password, $db_name);
  // Check connection
  if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
  }
   
  echo "Connected successfully";
   
  $sql = "INSERT INTO contact (fname, email, phone) VALUES ('Test', 'Testing', 'Testing@tesing.com')";
  if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
  } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);

  }

?>

<?php  

if ($_SERVER["REQUEST_METHOD"] == "POST") {



}
?>




<div class="customer_section">

<div class="middle_image">
    <img name = "bottom_logo_image" class = "bottom_logo_image" src="../images/Header_logo.png" alt="Sign_in Rice Image" heihgt = 100px width = 200px > 	
</div>

<!-- This is responsible to make the imortant informations about the resturant -->
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

 </div>

 <canvas id="contact_left_canva" class="contact_left_canva"> </canvas>
 <canvas id="contact_bottom_canva" class="contact_bottom_canva"> </canvas>
 <canvas id="contact_small_right_canva" class="contact_small_right_canva"> </canvas>
 <canvas id="contact_small_bottom_canva" class="contact_small_bottom_canva"> </canvas>
 


</body>

<!-- This is the part which makes the page detect when the user sign up or sign in to to there and adjust to the position where it is suppose to -->
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
   echo'<script> ScrollOnLoad(); </script>';
}
?>

</html>
