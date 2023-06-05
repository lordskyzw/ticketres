<?php
require 'dbConn.php'; //connect to bus website database
if(isset($_POST['getloc'])){
 $name = $_POST['search'];
$sql = "SELECT * FROM $name WHERE 1";
$result = $conn->query($sql);
if (!$result) {
 { //echo "Error: " . $sql . "<br>" . $conn->error; 
 echo "Bus Number:"." ".$name." "."not found";
 }
}
$rows = $result -> fetch_all(MYSQLI_ASSOC); 
}
?>
<html>
<head>
<title>real-time bus location</title>
<link rel="stylesheet" type="text/css" href="BusWeb.css">
 <script type="text/javascript" src="BusWeb.js"></script>
 </head>
<style>
body {
    font-family: Arial;
}
#map-layer {
margin: 20px 0px;
width: 100%;
height: 600px;
}
</style>
<body>
<h1>Real-time location of bus number BYO2021</h1>
<my-header></my-header>
<div id="map-layer"></div>
<script
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCf3xQU0Y9fCVBFpgDlvnK3V2vl7w
XSMNU&callback=initMap"
async defer></script>
 <script>
 var map;
 function initMap() { 
 var mapLayer = document.getElementById("map-layer");
var centerCoordinates = new google.maps.LatLng(-20.1559326, 28.5724568);
var defaultOptions = { center: centerCoordinates, zoom: 13 }
map = new google.maps.Map(mapLayer, defaultOptions);
<?php foreach($rows as $location){ ?>
 var location = new google.maps.LatLng(<?php echo $location['lat']; ?>, <?php echo 
$location['lng']; ?>);
 var marker = new google.maps.Marker({
 position: location,
  map: map 
 });
 <?php } ?> 
 }
 </script>
</body>
</html>