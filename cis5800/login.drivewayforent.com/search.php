<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://drivewayforent.com/style/testingderek.css">
<style>
body,h1,h2,h3,h4,h5 {font-family: "candara", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
#map {
  height: 100%;
}
/* Optional: Makes the sample page fill the window. */
html, body {
  height: 100%;
  margin: 0;
  padding: 0;
}
</style>
</head>


<body>
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

<div class="w3-main" style="margin-left:340px;margin-right:40px">


  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>Search for Driveways</b></h1>
    <hr style="width:50px;border:5px solid #3e6866" class="w3-round">
  </div>
<div id="map"></div>
<!-- Replace the value of the key parameter with your own API key. -->
<script async
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAXt30SYLmpi4Pdg05u2EW_0LwoIgSjl40&callback=initMap&libraries=&v=beta&map_ids=ac45247577eb1653"
  type="text/javascript">
</script>
 <script type="text/javascript">  var customLabel = {
        home1: {
          label: '$3'
        },
        home2: {
          label: '$4'
        },
        home3: {
          label: '$2'
        },
        home4: {
          label: '$3'
        },
        home5: {
          label: '$2'
        },
      };
        
        function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          mapId: "ac45247577eb1653",
          center: new google.maps.LatLng(40.6938964, -73.9476111), 
          zoom: 12
        });
        var infoWindow = new google.maps.InfoWindow;

          // Change this depending on the name of your PHP or XML file
          downloadUrl('http://login.drivewayforent.com/locations.php', function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {
              var id = markerElem.getAttribute('id');
              var name = markerElem.getAttribute('name');
              var address = markerElem.getAttribute('address');
              var type = markerElem.getAttribute('type');
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));

              var infowincontent = document.createElement('div');
              var strong = document.createElement('strong');
              strong.textContent = name
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = address
              infowincontent.appendChild(text);
              var icon = customLabel[type] || {};
              var marker = new google.maps.Marker({
                map: map,
                position: point,
                label: icon.label
              });
              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
            });
          });
        }



      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}
      </script>
    </div>
</body>
</html>