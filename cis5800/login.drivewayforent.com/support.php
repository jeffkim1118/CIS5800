<?php
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);
?>


<!-- default page template -->
<!DOCTYPE html>
<html lang="en">
<title>Support</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://drivewayforent.com/style/testingderek.css">

<style>
body,h1,h2,h3,h4,h5 {font-family: "candara", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><img src="http://drivewayforent.com/images/Screenshot_2.png" style="width:100%" alt="Driveway for Rent"></h3>
  </div>
  <div class="w3-bar-block">
    <a href="http://login.drivewayforent.com/index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="http://login.drivewayforent.com/search.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Search for Driveways</a> 
    <a href="http://login.drivewayforent.com/profile.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Update your Profile</a>
    <a href="http://login.drivewayforent.com/support.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Support</a>
    <a href="http://login.drivewayforent.com/about_us.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">About Us</a>
    <a href="http://login.drivewayforent.com/logout.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Logout</a>
  </div>
</nav> 

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">???</a>
  <span>Company Name</span>
</header>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">


  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>Support</b></h1>
    <hr style="width:50px;border:5px solid #3e6866" class="w3-round">
  </div>
  
  
  
<!-- insert page details here-->  
  
  <div class="w3-container" style="margin-top:10px" id="showcase">
      <h1><b><u>FAQ</u></b></h1>
<h2><b>Q: What if the customer parks their car in a driveway without confirming or paying?</b></h2>
<h3>There will be a report function, in which the customer will be sent a bill</h3>

<h2><b>Q: Do both parties need to be present during the renting process?</b></h2>
<h3>No, it only requires the customers to confirm they are renting out the driveway</h3>
<h2><b>Q: What if the renter's house is damaged by the rentee?</b></h2>
<h3>We will provide home insurance up to $10,000</h3>
<h2><b>Q: What if the customer doesn't leave on time?</b></h2>
<h3>They are given five minutes leeway. After that five minutes is up, rentees will have to pay a percentage of the payment depending on how much longer they stay. It is up to the renter's discretion to tow the car if past time</h3>
<div class="w3-container" style="margin-top:20px" id="showcase">
<h1><b>Still have questions? Send us a message!</b></h1> </div>
</div>
  

<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdzz_6ysOYcU_wk15w4YEs96zMS2ThM6QVaQk5iGe9xVQ1eeA/viewform?embedded=true" width="640" height="900" frameborder="0" marginheight="0" marginwidth="0">Loading???</iframe>


<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right"><a href="https://sites.google.com/view/cis5800-team6/home" title="CIS 5800 Team 6 " target="_blank" class="w3-hover-opacity">CIS 5800 Team 6 </a></p></div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</div>
</body>
</html>
