<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    <?php include "aboutstyle.css" ?><?php include "homestyle.css" ?><?php include "contactstyle.css" ?><?php include "footerstyle.css" ?>
  </style>



  <title>Home</title>
</head>

<body>

  <p id="textureBg" style="background-image: url('/Img/textureBg.png');"></p>

  <nav>
    <ul>
      <li><a href="#aboutus">About Us</a></li>
      <li><a href="#contact">Contact</a></li>
      <li><a href="http://127.0.0.1:5500/Scripts/list-n-g-os.html">NGOs</a></li>
      <li><a href="http://localhost/INDIAID/Scripts/login_form.php">LogIn/SignUp</a></li>
      <li><a href="http://localhost/INDIAID/Scripts/donate.php">Donate</a></li>
    </ul>
  </nav>

  <a id="logo" href="http://localhost/INDIAID/Scripts/index.php">INDIAID</a></h1>
  <h1 id="slogan1">Humanity</h1>
  <h1 id="slogan2">Above</h1>
  <h1 id="slogan3">Religion</h1>
  <h1 id="impact">Our Impact</h1>

  <p id="subSlogan">At our NGO, we believe in making a <span style="color: #BB0A21;">difference</span> in the world by
    taking action and creating positive change. We strive to be a beacon of hope and compassion, providing <span style="color: #BB0A21;">support and resources</span> to those in need.</p>



  <section class="counters">
    <div class="container">
      <div>
        <div class="counter" data-target="2000">0</div>
        <h4>Villages and slums are reached <br> out across the country</h4>
      </div>
      <div>
        <div class="counter" data-target="3400">0</div>
        <h4>Projects focused on education,<br> healthcare,
          and child care</h4>
      </div>
      <div>
        <div class="counter" data-target="150">0</div>
        <h4>150+ NGOs to choose <br> from for donations</h4>
      </div>
      <div>


      </div>
  </section>

  <script>
    <?php include "counter.js" ?>
  </script>




  <div id="aboutus">

    <h1 id="about1">About</h1>
    <h1 id="about2">INDIAID</h1>
    <h1 id="founders">Founders</h1>
    <h1 id="ourmissiontitle">Our <span style="color: #BB0A21;">Mission</span></h1>
    <img src="/INDIAID/Img/pp.png" id="founderpic1" alt="">
    <img src="/INDIAID/Img/pp2.png" id="founderpic2" alt="">


    <div id="line"></div>

    <p id="ourmissionsub">Our mission at INDIAID is to improve the lives of underprivileged communities by providing access to quality education and healthcare. We believe that every child deserves the opportunity to learn and grow, regardless of their background or circumstances.

      Through our education programs, we strive to empower children with the knowledge and skills they need to succeed in life. We work to ensure that every child has access to quality education, regardless of their economic or social status. We believe that education is the key to breaking the cycle of poverty and creating a brighter future for generations to come.

    </p>

    <p id="about3">We thrive to make helping easier and convenient through a digital platform. We have come up with an idea of developing a project of Online Listing of NGO’s in Bengaluru where users are provided with the privilege to donate materialistic items as well as support the NGO in terms of money donations. The purpose of the project is to build an application program to make donations faster and at the donators convince as it provides a facility of pick from their home.</p>

  </div>



  <div>

    <div class="greybox" id="contact"></div>

    <img src="/INDIAID/Img/contact-img.png" alt="" id="contactimg">

    <div class="container1">
      <form action="https://formspree.io/f/xpzeoqgb" method="POST">
        <h3>How can w<span style="color: #BB0A21;">e help you?</span></h3>
        <input type="text" id="name" name="name" placeholder="Your name" required>
        <input type="email" id="email" name="email" placeholder="Email id" required>
        <input type="tel" id="phone" name="phone" placeholder="10 digit phone no." pattern="[0-9]{10}" required>
        <textarea name="message" id="message" rows="4" placeholder="Enter your message" required></textarea>
        <button type="submit">Send</button>
      </form>
    </div>


  </div>
  <br>
  <br>
  <a href="/Scripts/becomeavolunteer.html" class="volbtn">Become a Volunteer Now!</a>



  <footer>
    <div class="container">
      <div class="footer-content">
        <div class="items">
          <a href="#" class="logo">INDIAID</a>
          <p> At our NGO, we believe in making a difference in the world by taking action and creating positive change. We strive to be a beacon of hope and compassion, providing support and resources to those in need.</p>

        </div>

        <div class="items">
          <h3>Legal</h3>
          <ul>
            <li><a href="#">Terms</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Cookie Policy</a></li>
            <li><a href="#">GDPR Compliance</a></li>
          </ul>
        </div>
        <div class="items">
          <h3>Support</h3>
          <ul>
            <li><a href="#contact">Contact</a></li>

          </ul>
        </div>

      </div>
      <hr>
      <p class="end">Copyright © 2023 by INDIAID All rights reserved.</p>
    </div>
  </footer>
</body>

</html>