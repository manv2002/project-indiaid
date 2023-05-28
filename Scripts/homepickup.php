<?php
$state = $_POST['state'];
$address = $_POST['address'];
$landmark = $_POST['landmark'];

$conn = new mysqli('localhost','root','1234','indiaid');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
} 
else{
    $stmt = $conn->prepare("insert into homepickup(state,address,landmark) values(?,?,?)");
    $stmt->bind_param("sss",$state,$address,$landmark);
    $stmt->execute();
    $html = file_get_contents('contributeofflineresponse.html');
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
        <?php include "contribute-offline-response.css"

        ?>
        </style>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
    />
  </head>
  <body>
    <div class="contribute-offline-response">

        <nav>
            <div class="about-us">About Us</div>
            <div class="announcement">Announcement</div>
            <div class="loginsignup">LogIn/Signup</div>
            <div class="contact">Contact</div>
            <div class="donate">Donate</div>
           <a href="/Scripts/index.php"> <div class="logo">INDIAID</div> </a>
        </nav>
        <b class="we-thank-you-container">We thank you for your contribution in
            <span class="making-this-world">making this world a better one!</span>
        </b>
      <img
        class="picture" alt="" src="/Img/3-1image.png"/>
        
      <div class="line-under"></div>
      <div class="our-executive-will-container">
        <span>Our executive will be contacting you soon, Please check your email for further notifications. 
                We will make sure, your donations made offline reaches the right hand. Thank you for choosing </span>
                <span class="indiaid1">INDIAID!</span>
      </div>
    </div>
  </body>
</html>
