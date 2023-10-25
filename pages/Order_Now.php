<!---------------------------------------------------->
<!-----------------------Order Now-------------------->
<!---------------------------------------------------->


<!DOCTYPE html>

<?php  error_reporting(0);  

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $o_Address = test_input($_POST['yourAddress']);
 $o_Apt = test_input($_POST['yourApt']);
 $o_Order_Date = test_input($_POST['order_date']);
 $o_Delivery_Time = test_input($_POST['delivery_time']);

}

?>


<html>
    <link rel="styleSheet" href="../css/NRK_CSS.css"> <!--- Provides a link to the Style Sheet --->  
    <title>  NewRoz Kebab Resturant Order Now </title>       <!--- The title of the website --->
    
    <head>

        <script>
        function delivery() {
                document.getElementById("delivery").style.border = "solid 1px";
                document.getElementById("delivery").style.opacity = "1";
                document.getElementById("pickup").style.border = "none";
                document.getElementById("pickup").style.opacity = "0.5";
                document.getElementById("first_line").style.display = "block";
                document.getElementById("second_line").style.display = "block";
                document.getElementById("date_err").style.top = "83.5%";
                document.getElementById("time_err").style.top = "83.5%";
                document.getElementById("order_left_canva").style.height = "88%";
                document.getElementById("order_right_canva").style.height = "88%";
                document.getElementById("order_bottom_canva").style.bottom = "-28%";
                document.getElementById("order_now_image").style.top = "46%";
            
                const oaddress = document.getElementById('order_address');
                      oaddress.value = '';
            
            }  

        function pickUp() {
                document.getElementById("pickup").style.border = "solid 1px";
                document.getElementById("pickup").style.opacity = "1";
                document.getElementById("delivery").style.border = "none";
                document.getElementById("delivery").style.opacity = "0.5";
                document.getElementById("first_line").style.display = "none";
                document.getElementById("second_line").style.display = "none";
                document.getElementById("date_err").style.top = "60%";
                document.getElementById("time_err").style.top = "60%";
                document.getElementById("order_left_canva").style.height = "63%";
                document.getElementById("order_right_canva").style.height = "63%";
                document.getElementById("order_bottom_canva").style.bottom = "-4.5%";
                document.getElementById("order_now_image").style.top = "33%";

                const oaddress = document.getElementById('order_address');
                      oaddress.value = "NewRoz Kebab";
                 }

         </script>


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

        <!-- This is the delivery and pick up section which the coustmer choose that and enter important information and then place an order which is going to direct the coustmer to the menu page -->
        <div class="Delivery_Section">
            <div class="Deliver">
            <button type="delivery" id="delivery" name="delivery" class="delivery" onclick="delivery()" >DELIVERY</button>    
            <button type="pickup" id="pickup" name="pickup" class="pickup" onclick="pickUp()">PICKUP</button>    <br> 
            <br>
            <form id="order_form" method="POST" action="Menu.html"> 
            <div class="Addresss">
            <div class="order_section" id="first_line">
            <input type="text" class="Address" placeholder="Your Address" name="yourAddress" id="order_address"> <br> 
            <br> <small> Error Message </small> <br>
            </div>

            <div class="Apartments">
            <div class="order_section" id="second_line">
            <input type="text" class="Apartment" placeholder="Apt/Floor/Suite(optional)" name="yourApt" id="Apartment"> <br> 
            <br>
            </div>
                <div class="order_date_and_time">
                <div class="order_section">
                <input style="width: 180px;" class="delivery_date" type="date" id="order_date" name="order_date" name="delivery">
                <small id="date_err" style="position: absolute; top: 83.5%; left:36.5%;"> Error Message </small>
                </div>
                
                <div class="order_section">
                <select id="order_time" style="width: 190px; border-radius: 5px;" name="delivery_time" class="time">
                <option value=''>Choose Time</option>    
                <option value="asap">ASAP</option>
                <option value="11am">11 AM</option>
                <option value="12pm">12 PM</option>
                <option value="1pm">1 PM</option>
                <option value="2pm">2 PM</option>
                <option value="3pm">3 PM</option>
                <option value="4pm">4 PM</option>
                <option value="5pm">5 PM</option>
                <option value="6pm">6 PM</option>
                <option value="7pm">7 PM</option>
                <option value="8pm">8 PM</option>
                <option value="9pm">9 PM</option>
                </select>
                <small id="time_err" style="position: absolute; top: 83.5%; left:51.25%;"> Error Message </small>
                </div>
                </div>
                <br><br><br>
                
                <div style="text-align: center;">
                <button type="submit" class="placing" name="submit" >PLACE ORDER</button>
                </div> <br><br>
                <script src="../jscript/NRK_OrderNow_JScript.js"></script>
                </form>
             </div>
        </div>
        </div>
        </div>
        </div>

<div class="customer_section">

    <div class="middle_image">
        <img name = "bottom_logo_image" class = "bottom_logo_image" src="../images/Header_logo.png" alt="Sign_in Rice Image" heihgt = 100px width = 200px > 	
    </div>
    
    <div>
       <!-- This is responsible to make the imortant informations about the resturant -->
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

    <canvas id="order_left_canva" class="order_left_canva"> </canvas>
    <canvas id="order_right_canva" class="order_right_canva"> </canvas>
    <canvas id="order_form_top_canva" class="order_form_top_canva"> </canvas>
    <canvas id="order_form_right_canva" class="order_form_right_canva"> </canvas>
    <canvas id="order_bottom_canva" class="order_bottom_canva"> </canvas>

    <img id = "order_now_image" class = "order_now_image" src="../images/Order_now_image.png" alt="Order_now_image"> 	
   

    </body>
</html>