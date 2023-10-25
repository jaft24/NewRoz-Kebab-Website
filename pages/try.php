<!---------------------------------------------------->
<!---------------------Contact Us--------------------->
<!---------------------------------------------------->

<!-- This is the page where the storing of the data happens it takes the ddata ir hte information from sql and brings this to htis page.-->
<!-- It's just a plain HTML there is no CSS in it but further improvment going to hapen to it soon -->

<?php 

$connection = mysqli_connect("localhost","root","ChromeBook=2019","newroz_kebab");
if (!$connection){
    die("Oops spomething went wrong I can't connect right now.");
}

echo "\n WELCOME ADMIN".'<br><br>'; 

echo "\n USERS".'<br>'; 
$query = "select * from users";
$stmt = mysqli_query($connection, $query);
    echo 'Username'.'&nbsp; &nbsp;'.'Email'.'<br>';
while ($row = mysqli_fetch_array($stmt,MYSQLI_ASSOC)) {
    echo $row['user_name'].'&nbsp; &nbsp; &nbsp;'.$row['email'].'</br>';
}

echo '<br><br>';

echo "RESERVATIONS".'<br>'; 
$query = "select * from reservation";
$stmt = mysqli_query($connection, $query);
    echo 'Name'.'&nbsp; &nbsp; &nbsp;'.'Date'.'&nbsp; &nbsp; &nbsp;'.'Time'.'&nbsp; &nbsp; &nbsp;'.'Number of People'.'<br>';
while ($row = mysqli_fetch_array($stmt,MYSQLI_ASSOC)) {
    echo $row['full_name'].'&nbsp; &nbsp; &nbsp;'.$row['date'].'&nbsp; &nbsp; &nbsp;'.$row['time'].'&nbsp; &nbsp; &nbsp;'.$row['people_number'].'</br>';
}

echo '<br><br>';

echo "PICK UP".'<br>'; 
$query = "select * from pickup";
$stmt = mysqli_query($connection, $query);
echo 'Item Name'.'&nbsp; &nbsp; &nbsp;'.'Quantity'.'&nbsp; &nbsp; &nbsp;'.'Date'.'&nbsp; &nbsp; &nbsp;'.'Time'.'<br>';
while ($row = mysqli_fetch_array($stmt,MYSQLI_ASSOC)) {
    echo $row['item'].'&nbsp; &nbsp; &nbsp;'.$row['quantity'].'&nbsp; &nbsp; &nbsp;'.$row['date'].'&nbsp; &nbsp; &nbsp;'.$row['time'].'</br>';
}

echo '<br><br>';

echo "DELIVERY".'<br>'; 
$query = "select * from delivery";
$stmt = mysqli_query($connection, $query);
echo 'Item Name'.'&nbsp; &nbsp; &nbsp;'.'Quantity'.'&nbsp; &nbsp; &nbsp;'.'Address'.'&nbsp; &nbsp; &nbsp;'.'Apartment'.'&nbsp; &nbsp; &nbsp;'.'Date'.'&nbsp; &nbsp; &nbsp;'.'Time'.'<br>';
while ($row = mysqli_fetch_array($stmt,MYSQLI_ASSOC)) {
    echo $row['item'].'&nbsp; &nbsp; &nbsp;'.$row['quantity'].'&nbsp; &nbsp; &nbsp;'.$row['address'].'&nbsp; &nbsp; &nbsp;'.$row['apt_no'].'&nbsp; &nbsp; &nbsp;'.$row['date'].'&nbsp; &nbsp; &nbsp;'.$row['time'].'</br>';
}


echo '<br><br>';


echo "CONTACT CLIENTS".'<br>'; 
$query = "select * from contact";
$stmt = mysqli_query($connection, $query);
echo 'Full Name'.'&nbsp; &nbsp; &nbsp;'.'Email'.'&nbsp; &nbsp; &nbsp;'.'Phone'.'&nbsp; &nbsp; &nbsp;'.'Previous Customer?'.'&nbsp; &nbsp; &nbsp;'.'Body'.'<br>';
while ($row = mysqli_fetch_array($stmt,MYSQLI_ASSOC)) {
    echo $row['fname'].'&nbsp; &nbsp; &nbsp;'.$row['email'].'&nbsp; &nbsp; &nbsp;'.$row['phone'].'&nbsp; &nbsp; &nbsp;'.$row['previous_customer'].'&nbsp; &nbsp; &nbsp;'.$row['body'].'</br>';
}






?>