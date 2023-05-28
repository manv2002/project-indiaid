<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <style>
        <?php include "global.css" ?>
        <?php include "/Scripts/donatestyle.css" ?>
    </style>
    <title>Donate</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
    />
  </head>
  <body>
  <nav>
    <ul>
      <li><a href="http://localhost/INDIAID/Scripts/index.php">About Us</a></li>
      <li><a href="http://localhost/INDIAID/Scripts/index.php">Contact</a></li>
      <li><a href="#">NGOs</a></li>
      <li><a href="http://localhost/INDIAID/Scripts/login_form.php">LogIn/SignUp</a></li>
      <li><a href="http://localhost/INDIAID/Scripts/donate.php">Donate</a></li>
    </ul>
  </nav>

  <a id="logo" href="http://localhost/INDIAID/Scripts/index.php">INDIAID</a></h1>
       
        <img class="donate-child" alt="" src="/INDIAID/Img/people-help-a-wheelchair-bound-person-to-cast-his-vote-during-the-fi-.jpg"/>
      <img class="donate-item" alt="" src="/INDIAID/Img/The-Problematic-Nature-of-Women-Empowerment-Programs-in-India.jpg"/>
      <img class="donate-inner" alt="" src="/INDIAID/Img/donate_to_project.jpg" />


      <div class="donations">Donations</div>
      <div class="line-div"></div>
      <div class="instructions-donations-container">
        <p class="instructions-donations">
          INSTRUCTIONS - Donations can be both monetary or materialistic. Card and UPI payments are available. Donations can also be done offline as
          <br>we provide home pick up facilities in ‘Support INDIAID’. The donor can select the NGO to which they want to donate. They can also support
        <br>INDIAID by helping us monetarily.</p>
      </div>
      <form id="form">
        <label for="selectanngo" class="select-an-ngo">Select an NGO from the list</label>
      <select onchange="is(this.value)" name="ngoinfo" class="textselectngo">
        <option value="https://donate.smilefoundationindia.org/#donateSection" selected>Smile Foundation</option>
        <option value="https://robinhoodarmy.com/sharefood" selected>Robin Hood Army</option>
        <option value="https://www.cry.org/donation/" selected>Cry Ngo</option>
        <option value="https://divyadisha.org/how-you-can-help/" selected>Divya Disha</option>
        <option value="https://rebirthcaretrust.org/donate/" selected>Rebirth Care Trust</option>
      </select>
      
    </form>
    <script>
      function is(src)
      {
        window.location=src;
      }
    </script>
      <a href="#"><button class="ngo-button" id="donatetongo">Donate to an NGO</button></a>
      <a href="/Scripts/payment.html"><button class="support-button">Support INDIAID</button></a>
    
    </div>
    <script src="/Scripts/donate.js"></script>
  </body>
</html>
