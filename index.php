<?php  error_reporting(0);  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $Sin_Fname = test_input($_POST['sin_fname']);
 $Sup_Fname = test_input($_POST['sup_fname']);
}
?>

<script>
        function ScrollOnLoad(){
        window.scrollTo(0, 950);
        }
</script>

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


<html>
    
    <head>
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="styleSheet" href="css/NRK_CSS.css"> <!--- Provides a link to the Style Sheet --->  
        <title>  NewRoz Kebab Resturant </title>       <!--- The title of the website --->
       
        <div class = "admin_login_contact_form" id= "admin_login_contact_form">
            <div class="admin_login_form">
            <form id="adminlogin_form" method="post" action="Admin_homepage.html"> <br>
            <img onclick="closeAdmin()" name = "x_mark" class = "x_mark"  src="images/x_mark.png" alt="NewRoz Kebab Logo Image"> 

              <!-- Here we edit the top right corner which is the admin login part-->
                <h2 style="margin-top:2%;"> <span class = "spaner" style="color :red;">A</span><span style="color :black;">dmin</span>
                <span class = "spaner" style="color :red;">L</span><span style="color :black;">ogin</span> </h2> <br>
            <img name = "Admin" class = "admin_image"  src="images/AdminIcon.png" alt="NewRoz Kebab Logo Image"> <br>
            <div class="adminlogin_sections">
            <input type="text"  class ="admin_input" placeholder="User Name" name="admin_input" id="admin_input">  
            <br><small>Error Message</small> <br> 
            </div>
            <div class="adminlogin_sections">
            <input type="password"  class ="admin_input" placeholder="Password" name="admin_password" id="admin_password">  
            <br><small>Error Message</small> <br> <br>
            </div>
            <input class="admin_login_button" type="submit" value="Submit"> <br><br>   
            <small class="forgotpass_text" onclick="myFunctions()">Forgot Password?</small> 
            <canvas id="popup_top_canva" class="popup_top_canva"> </canvas>
            <canvas id="popup_left_canva" class="popup_left_canva"> </canvas>
            <script src="jscript/NRK_Adminlogin_JScript.js"></script>
            </form>
        
        </div>
    </div>
    <!-- Here is the part which the JS comes in for the admin login page which if they forgot their password and also the opening the admin page-->
    <script>
        function openAdmin() {
        document.getElementById("admin_login_contact_form").style.display = "block";
        document.getElementById("main").style.display = "none";
    }

        function closeAdmin() {
        document.getElementById("main").style.display = "block"; 
        document.getElementById("admin_login_contact_form").style.display = "none";
    }

       function myFunction() {
        alert("If you want to reset your password please give us a call");
       }
    </script>
    
    </head>

    <body>
      <!--  The main div is the page which is responsible for the creating a consistent header through out all other pages -->
<div class="main" id="main">

        <div class="header_admin">
            <a onclick="openAdmin()" id="admin_button"><img src="images/AdminIcon.png" class = "admin_logo" alt="adminicon" style="width:42px;height:42px;"></a>
       </div>

        <div class = "header">
        <!--- Header Buttons --->
        <!-- <div class="header_left"> -->
        <button style ="background: red;" type="button" name = "Home_Button" class = "button" onclick=" "> <a class="a" href="index.php"><span style="color:white;"> HOME </span> </a> </button>
        <button type="button" name = "Our_Story_Button" class = "button" onclick=" "> <a class="a" href="pages/Our_Story.html"> OUR STORY </a> </button>
        <button type="button" name = "Reservation_Button" class = "button" onclick=" "> <a class="a" href="pages/Reservation.php" > RESERVATIONS </a> </button>
        <!-- </div> -->
        
        <!-- <div class="header_center">  -->
        <img name = "NRK_logo" class = "NRK_logo"  src="images/Header_logo.png" alt="NewRoz Kebab Logo Image" width=" " height=" ">
        <!-- </div> -->

        <!-- <div class="header_right"> -->
        <button type="button" name = "Order_Now_Button" class = "button" onclick=" "> <a class="a" href="pages/Order_Now.php" > ORDER NOW</a> </button>
        <button type="button" name = "Menu_Button" class = "button" onclick=" "> <a class="a" href="pages/Menu.html"> MENU </a> </button>
        <button type="button" name = "Contact_Us_Button" class = "button" onclick=" "> <a class="a" href="pages/Contact_Us.php" > CONTACT US </a> </button>
        <!-- </div>     -->

    </div>

        <div class= "body_components">
        <div class = "social_media" > <br> <br>
        <a href="https://www.facebook.com/"><img name = "Facebook_logo" class = "Facebook_logo" src="images/Facebook_logo.png" alt="Facebook Logo Image" width=" " height=" "> </a> <br> <br>
        <a href="https://twitter.com/"><img name = "Twitter_logo" class = "Twitter_logo" src="images/Twitter_logo.png" alt="Twitter Logo Image" width=" " height=" "> </a> <br> <br>
        <a href="https://www.Instagram.com/"><img name = "Instagram_logo" class = "Instagram_logo" src="images/Instagram_logo.png" alt="Instagram Logo Image" width=" " height=" "> </a> <br> <br>
        </div>

       
        <div class="wrapper">
            <img name = "NRK_Kebab" class = "NRK_Kebab" src="images/Homepage_kabab.png" alt="Kebab Logo Image">
			</div>

        <!--- Side Slogan -->
        <div class = "side_slogan">
        <p1> The Best Kebab's in Town </p1>
        </div>

        </div>
        <!-- div reponsible for the reviews -->
        <div class = "reviews">
        <h1><span class = "spaner" style="color :red;">R</span><span style="color :black;">eviews</span> </h1>  <br>
      
        
        <div class="name_and_stars">
        <h2> <span class = "spaner" style="color :red;">J</span><span style="color :black;">ane</span>
             <span class = "spaner" style="color :red;">D</span><span style="color :black;">oe</span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star"></span>  </h2>
        </div>

            <div class = "written_comment">
            <p2>  When you have a great story about how your product or service was built to change lives, share it.
                  The About Us page is a great place for it to live, too. </p2> <br> <br>
            </div>

            <div class="name_and_stars">
                <h2> <span class = "spaner" style="color :red;">O</span><span style="color :black;">wen</span>
                     <span class = "spaner" style="color :red;">B</span><span style="color :black;">en</span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star"></span>
                     <span class="fa fa-star"></span>  </h2>
                </div>
        
                    <div class = "written_comment">
                    <p2>  When you have a great story about how your product or service was built to change lives, share it.
                          The About Us page is a great place for it to live, too. </p2> <br> <br>
                    </div>
         
         <div class="name_and_stars">
         <h2> <span class = "spaner" style="color :red;">W</span><span style="color :black;">ill</span>
              <span class = "spaner" style="color :red;">M</span><span style="color :black;">ax</span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>  </h2>
        </div>

       <div class = "written_comment">
       <p2> When you have a great story about how your product or service was built to change lives, share it.
            The About Us page is a great place for it to live, too.  </p2> <br> <br> 
        </div>
    </div>

    <div class = "Sign_up_in">
            <div class="sign_in" id="opacity_control">

            <div class="form1" id="form_2" style="opacity: 1.0; margin-top: -10%; margin-left: -22%; display: none; "> 
        
            
              <div style="width: 375px; height: 320px; margin: auto; text-align:center; border-radius: 15px;">
              <br> <h3 style="color:red; margin-top:1%;"> Welcome back <?php echo $Sin_Fname; ?> !</h3>
              <p style="text-decoration:none; color:rgb(246, 116, 116);">
                 ————————————————
              <br><img class="zoom-in-zoom-out" src="images/forkandknife.png" alt="Mail Image" width=100px height=95px>  <br><br>
              <a class="c" href="pages/Contact_Us.php"> <div> <div class="d" style="display:flex; align-items: center; margin-left: 24%; color:rgb(246, 116, 116);"> <div> Leave us a Comment &nbsp; </div> <div> <img class="expand_icons" src="images/notes.png" alt="Mail Image" width=35px height=25px> </div> </div> </div> </a>
              <a class="c" href="pages/Menu.html"> <div> <div class="d" style="display:flex; align-items: center; margin-left: 22%; margin-top: 2%; color:rgb(246, 116, 116);"> <div> Continue in the Menu &nbsp; </div> <div> <img src="images/Soupicon.png" alt="Mail Image" width=35px height=35px> </div> </div> </div> <br> </a>
              ———————————————— <br>  
              
              </p>
          
              </div>
        
        
        
             </div>


            <!-- Div responsible for creating the welcome back log in page -->
            <div class="form1" id="contact_response">
            <h2 style="color:red"> Welcome Back </h2>  <br>
            <form id="sign_in_form" name = "form" method="POST" action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF "]);?>">
            <div class="signin_sections">
            <input type="text" class="input" placeholder="Username" name="sin_fname" id="sin_username"><br> <br>
            <small>Error Message</small> <br><br>
            </div>
            <div class="signin_sections">
            <input type="password" class="input" placeholder="Password" name="sin_password" id="sin_password"><br> <br>
            <small>Error Message</small> <br><br>
            </div>
            <button type="submit" name="sign_in_button" class="front_button" >Sign In</button> <br>
            <script src="jscript/NRK_Sign_in_JScript.js"></script>
            </form>


            </div>
            </div>

            <div class="middle_image_1">
            <a class="a" href="pages/Order_Now.php"><img name = "sign_in_image" class = "sign_in_image" src="images/middle_kebab.png" alt="Sign_in Rice Image" heihgt = "620" width = "620" > </a>	
            <h2 style="color:red; font-size:25px" class="small_middle_text">ORDER<br>&nbsp;NOW</h2>
            <canvas id="small_left_canva" class="small_left_canva"> </canvas>
            <canvas id="small_right_canva" class="small_right_canva"> </canvas>
            </div> 

            <div class="sign_up" id="opacity_control2">

            <div class="form1" id="form_3" style="opacity: 1.0; margin-top: 0%; margin-left: -2%; display: none; "> 

                <div style="width: 375px; height: 320px; margin: auto; text-align:center; border-radius: 15px;">
                <br> <h3 style="color:red; margin-top:1%;"> Welcome to NewRoz Kebab <?php echo $Sup_Fname; ?> !</h3>
                <p style="text-decoration:none; color:rgb(246, 116, 116);">
                   ————————————————
                <br><img class="zoom-in-zoom-out" src="images/forkandknife.png" alt="Mail Image" width=100px height=95px> <br><br>
                <a class="c" href="pages/Contact_Us.php"> <div> <div class="d" style="display:flex; align-items: center; margin-left: 24%; color:rgb(246, 116, 116);"> <div> Leave us a Comment &nbsp; </div> <div> <img src="images/notes.png" alt="Mail Image" width=35px height=25px> </div> </div> </div> </a> 
                  <a class="c" href="pages/Menu.html">  <div> <div class="d" style="display:flex; align-items: center; margin-left: 15%; margin-top: 2%; color:rgb(246, 116, 116);"> <div> Explore our delicious Menu &nbsp; </div> <div> <img src="images/Soupicon.png" alt="Mail Image" width=35px height=35px> </div> </div> </div> <br> </a>  
               ———————————————— <br>     
                
                </p>
            
                </div>

            </div>

            <!-- Div responsible for creating the Join Us log in page which helps the user to to sign up -->
            <div class="form2" id="contact_response2">
            <h2 style="color:red"> Join Us </h2>  <br>
            <form id="sign_up_form" name = "form" method="POST" action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF "]);?>">
            <div class="signup_sections">  
            <input type="text" class="input" placeholder="Username" name="sup_fname" id="sup_username"><br> <br>
            <small>Error Message</small> <br> <br>
            </div>
            <div class="signup_sections">
            <input type="email" class="input" placeholder="Email" name="sup_email" id="sup_email"><br> <br>
            <small>Error Message</small> <br> <br>
            </div>
            <div class="signup_sections">
            <input type="password" class="input" placeholder="Password" name="sup_password" id="sup_password"><br> <br>
            <small>Error Message</small> <br> <br>
            </div>           
            <button type="submit" name="sign_up_button" class="front_button" >Sign Up</button> <br> <br>
            <script src="jscript/NRK_Sign_up_JScript.js"></script>
            </form>
            </div>
            </div>


    </div>

       <!-- Below is a php that is responsible for making the Welocme Back and the Join us page take user information and save it or to collect users info -->
    <?php  error_reporting(0);

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

     

     if (isset($_POST['sign_in_button'])){

    $Sin_Fname = test_input($_POST['sin_fname']);
    $Sin_Password = test_input($_POST['sin_password']);
 
    echo '<script type="text/JavaScript">
    document.getElementById("contact_response").style.display = "none";
    document.getElementById("form_2").style.display = "block";
    document.getElementById("opacity_control").style.opacity = "1.0";
    </script>';

     }
    
     if (isset($_POST['sign_up_button'])){

        $Sin_Fname = test_input($_POST['sup_fname']);
        $Sin_Email = test_input($_POST['sup_email']);
        $Sin_Password = test_input($_POST['sup_password']);
     
        echo '<script type="text/JavaScript">
        document.getElementById("contact_response2").style.display = "none";
        document.getElementById("form_3").style.display = "block";
        document.getElementById("opacity_control2").style.opacity = "1.0";
        </script>';
    
       }

      

  }

?>
    <!-- Below is the footer part which have important information about the restaurant to contact or find them -->
    <div class="customer_section">

    <div class="middle_image">
        <img name = "bottom_logo_image" class = "bottom_logo_image" src="images/Header_logo.png" alt="Sign_in Rice Image" heihgt = 100px width = 200px > 	
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
 <p5> <a class="a" href="index.php"> HOME </a> </p5> <p5 style="font-weight:bold; color:red;">|</p5> 
 <p5> <a class="a" href="pages/Our_Story.html"> OUR STORY </a> </p5> <p5 style="font-weight:bold; color:red;">|</p5> 
 <p5> <a class="a" href="pages/Reservation.php" > RESERVATIONS </a> </p5 style="font-weight:bold; color:red;"> <p5>|</p5> 
 <p5> <a class="a" href="pages/Order_Now.php" > ORDER NOW</a> </p5> <p5 style="font-weight:bold; color:red;">|</p5> 
 <p5> <a class="a" href="pages/Menu.html"> MENU </a> </p5> <p5 style="font-weight:bold; color:red;">|</p5> 
 <p5> <a class="a" href="pages/Contact_Us.php" > CONTACT US </a> </p5>
    </div>

    <canvas id="top_left_canva" class="top_left_canva"> </canvas>
    <canvas id="top_right_canva" class="right_canva"> </canvas>
    <canvas id="middle_canva" class="middle_canva"> </canvas>
    <canvas id="review_canva" class="review_canva"> </canvas>
    <canvas id="left_divide_canva" class="left_divide_canva"> </canvas>
    <canvas id="right_divide_canva" class="right_divide_canva"> </canvas>
    <canvas id="bottom_canva" class="bottom_canva"> </canvas>
    
    </div>

   

     </body>
<!-- This is the part which makes the page detect when the user sign up or sign in to to there and adjust to the position where it is suppose to -->
     <?php

     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        echo'<script> ScrollOnLoad(); </script>';
     }
     ?>

</html>