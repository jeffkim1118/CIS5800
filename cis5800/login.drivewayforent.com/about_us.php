<!-- default page template -->
<!DOCTYPE html>
<html lang="en">
<title>About Us</title>
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
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>Company Name</span>
</header>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">


  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>About the Team</b></h1>
    <hr style="width:50px;border:5px solid #3e6866" class="w3-round">
  </div>
  
  
  
<!-- insert page details here-->  
  <div class="w3-row-padding">
    <div class="w3-full">
      <h2><img src="images/aboutus_an.jpg" style="width:25%" alt="an wang">An Wang: Product Manager </h2>
      <h2><img src="images/aboutus_danny.jpg" style="width:25%" alt="danny wang">Danny Wang: Technology Architect </h2>
      <h2><img src="images/aboutus_derek.jpg" style="width:25%" alt="derek lee">Derek Lee: Frontend Designer </h2>
      <h2><img src="images/aboutus_ed.jpg" style="width:25%" alt="eduart tahiraj">Eduart Tahiraj: Project Designer </h2>
      <h2><img src="images/aboutus_yoonsung.jpg" style="width:25%" alt="yoonsung kim">Yoonsung Kim: Front/Backend Developer </h2>
      
  </div>
  </div>
  


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
