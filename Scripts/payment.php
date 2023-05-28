<?php 

$fname=$_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$country = $_POST['country'];
$phone = $_POST['phone'];

 #connection
 $conn = new mysqli('localhost','root','1234','indiaid');
 if($conn->connect_error){
     die('Connection Failed : '.$conn->connect_error);
 } 
 else{
     $stmt = $conn->prepare("insert into payment(id,fname,lname,address,city,state,zip,country,phone,email) values(0,?,?,?,?,?,?,?,?,?)");
     $stmt->bind_param("sssssisss",$fname,$lname,$address,$city,$state,$zip,$country,$phone,$email);
     $stmt->execute();
     $stmt->close();
     $conn->close();
 }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <style>
      <?php include "payment1.css" 
      ?>
      </style>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap"
    />
  </head>
  <body>
    <div class="payment1">
      <div class="about-us5">About Us</div>
      <div class="announcement5">Announcement</div>
      <div class="loginsignup5">LogIn/Signup</div>
      <div class="contact5">Contact</div>
      <button type="button" class="button3">
        <div class="donate-btn4">
            <div class="donate-btn-child2"></div>
            <div class="proceed-with-payment1">Proceed with payment</div>
          </div>Proceed with payment
      </button>
      <div class="logo5">INDIAID</div>
      <div class="bottomlinks4"></div>
      <img class="payment1-child" alt="" src="/Img/Rectangle 29.png" />
  
  
      <button class="button4">Card</button>
      <a href="/Scripts/payment3.html"><button class="button6">UPI</button></a>

      <form action="paymentcard.php" method="post">
        <label for="name" class="name1">Name</label>
        <input type="text" id="name" name="name" class="textfieldname" required><br><br>
        <label for="amount" class="amount1">Amount</label>
        <input type="text" id="amount" name="amount" class="textfieldamount" required><br><br>
        <label for="currency" class="currency1">Currency</label>
        <input type="text" id="currency" name="currency" class="textfieldcurrency" required><br><br>
        <label for="cardno" class="card-no1">Card No.</label>
        <input type="text" id="cardno" name="cardno" class="textfieldcardno" required><br><br>
        <label for="cvv" class="cvv1">CVV</label>
        <input type="text" id="cvv" name="cvv" class="textfieldcvv" required><br><br>
        <label for="expirydate" class="expiry-date1">Expiry Date</label>
        <input type="text" id="expirydate" name="expirydate" class="textfieldexpirydate" required><br><br>
        <input type="submit" value="Proceed with payment" class="button3">
      </form>

      <div class="details-disclaimers-container2">
        <span class="span4">Details</span><span class="span4">, </span><span class="span4">Disclaimers</span
          > & <span class="span4">Terms and Conditions</span>
      </div>
      <b class="charity-is-power-container2"
        ><span class="span4">Charity</span> is power</b
      >
      <div class="payment1-child9"></div>
      <div class="mmyy1">MM/YY</div>
     
    </div>
  </body>
</html>
