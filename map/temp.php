<!DOCTYPE html>
<?php include_once('connect3.php');
 include('connect.php');
 
 ?>
<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
<head>
	<title>My Bus Schedule</title>
	<style>
		
	table {
		border-collapse: collapse;
		width: 100%;
		margin: 20px 0;
		font-size: 1em;
		min-width: 400px;
		box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
		height: 50vh; 
	}
	th, td {
		padding: 12px 15px;
	}
	thead tr {
		background-color: #009879;
		color: #ffffff;
		text-align: left;
	}
	tr:nth-of-type(even) {
		background-color: #f3f3f3;
	}
	tr:hover {
		background-color: #dddddd;
	}
	
	form {
  display: flex;
  flex-direction: column;
  align-items: center;
}

input[type="text"], input[type="submit"] {
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  margin-bottom: 10px;
  width: 300px;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  cursor: pointer;
  transition: background-color 0.3s ease-in-out;
}

input[type="submit"]:hover {
  background-color: #3e8e41;
}

a {
  display: block;
  text-align: center;
  color: #555;
  text-decoration: none;
  margin-bottom: 10px;
  font-size: 14px;
}

a:hover {
  text-decoration: underline;
}

	</style>
	<script>
////////////////////////////////////////////////////////////////////////////////////////////////transit state

var trans = [
			"<?php 

   
$sqlget = "SELECT * FROM tbl_gps2 order by ID Desc limit 1";
$sqldata = mysqli_query($dbcon,$sqlget) or die('error gettong db');

$row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC);
$IDD = $row["ID"];
$longitude = $row["longitude"];


$sqlget = "SELECT * FROM tbl_gps2 WHERE ID = ($IDD - 1)  ";
$sqldata = mysqli_query($dbcon,$sqlget) or die('error gettong db');

$row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC);
$longitude1 = $row["longitude"];

if($longitude1 == 0)
{
    echo "network is down reloading coordinates";
}

if( ($longitude - $longitude1) > 0 )
{
$town = "IN TRANSIT TO TOWN";
    echo $town;
    $add_location_query = $connect->prepare("UPDATE buses_info SET transit_status=? WHERE id = 1");
    $add_location_query->execute($town);
}

if( ($longitude - $longitude1) < 0 )
{
$hit = "IN TRANSIT TO HIT";
    echo $hit;
    
    $add_location_query = $connect->prepare("UPDATE buses_info SET transit_status=? WHERE id = 1");
    $add_location_query->execute($hit);

}

?>",


"<?php 
			

   
$sqlget = "SELECT * FROM tbl_gps2 order by ID Desc limit 1";
$sqldata = mysqli_query($dbcon,$sqlget) or die('error gettong db');

$row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC);
$IDD = $row["ID"];
$longitude = $row["longitude"];


$sqlget = "SELECT * FROM tbl_gps2 WHERE ID = ($IDD - 1)  ";
$sqldata = mysqli_query($dbcon,$sqlget) or die('error gettong db');

$row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC);
$longitude1 = $row["longitude"];

if($longitude1 == 0)
{
    echo "network is down reloading coordinates";
}

if( ($longitude - $longitude1) > 0 )
{
$town = "IN TRANSIT TO TOWN";
    echo $town;
    $add_location_query = $connect->prepare("UPDATE buses_info SET transit_status=? WHERE id = 1");
    $add_location_query->execute($town);
}

if( ($longitude - $longitude1) < 0 )
{
$hit = "IN TRANSIT TO HIT";
    echo $hit;
    
    $add_location_query = $connect->prepare("UPDATE buses_info SET transit_status=? WHERE id = 1");
    $add_location_query->execute($hit);

}
			?>"
		
		];

		function updateTrans() {
			var bus1Trans = document.getElementById("transee");
			var currentSt = bus1Trans.innerHTML;
			var newSt = currentSt;
		if (newSt == currentSt) {
				newSt = trans[Math.floor(Math.random() * trans.length)];
			}
			bus1Trans.innerHTML = newSt;
		}

		setInterval(updateTrans, 10000);

//////////////////////////////////////////////////////////////////////////////////////////////////////checkpoints




var trans1 = [
			"<?php 

  
$sqlget = "SELECT * FROM tbl_gps2 order by ID Desc limit 1";
$sqldata = mysqli_query($dbcon,$sqlget) or die('error gettong db');

$row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC);
$IDD = $row["ID"];
$longitude = $row["longitude"];


$sqlget = "SELECT * FROM tbl_gps2 WHERE ID = ($IDD - 1)  ";
$sqldata = mysqli_query($dbcon,$sqlget) or die('error gettong db');

$row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC);
$longitude1 = $row["longitude"];

if($longitude <= 31.023609 && $longitude >= 31.022059)
{
    $t = "CHOPPIES";
     echo $t;
       $add_location_query = $connect->prepare("UPDATE buses_info SET checkpoints=? WHERE id = 1");
    $add_location_query->execute($t);
}


if($longitude <= 31.009819 && $longitude >= 31.005712)
{
    $tt = "HIT";
     echo $tt;
       $add_location_query = $connect->prepare("UPDATE buses_info SET checkpoints=? WHERE id = 1");
    $add_location_query->execute($tt);
}

if($longitude <= 31.059572 && $longitude >= 31.035080)
{
    $ttt = "TOWN";
     echo $ttt;
       $add_location_query = $connect->prepare("UPDATE buses_info SET checkpoints=? WHERE id = 1");
    $add_location_query->execute($ttt);
}





?>",


"<?php 
			
 
$sqlget = "SELECT * FROM tbl_gps2 order by ID Desc limit 1";
$sqldata = mysqli_query($dbcon,$sqlget) or die('error gettong db');

$row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC);
$IDD = $row["ID"];
$longitude = $row["longitude"];


$sqlget = "SELECT * FROM tbl_gps2 WHERE ID = ($IDD - 1)  ";
$sqldata = mysqli_query($dbcon,$sqlget) or die('error gettong db');

$row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC);
$longitude1 = $row["longitude"];

if($longitude <= 31.023609 && $longitude >= 31.022059)
{
    $t = "CHOPPIES";
     echo $t;
       $add_location_query = $connect->prepare("UPDATE buses_info SET checkpoints=? WHERE id = 1");
    $add_location_query->execute($t);
}


if($longitude <= 31.009819 && $longitude >= 31.005712)
{
    $tt = "HIT";
     echo $tt;
       $add_location_query = $connect->prepare("UPDATE buses_info SET checkpoints=? WHERE id = 1");
    $add_location_query->execute($tt);
}

if($longitude <= 31.059572 && $longitude >= 31.035080)
{
    $ttt = "TOWN";
     echo $ttt;
       $add_location_query = $connect->prepare("UPDATE buses_info SET checkpoints=? WHERE id = 1");
    $add_location_query->execute($ttt);
}


			?>"
		
		];

		function updateTrans1() {
			var bus1Trans1 = document.getElementById("transee1");
			var currentSt1 = bus1Trans1.innerHTML;
			var newSt1 = currentSt1;
		if (newSt1 == currentSt1) {
				newSt1 = trans1[Math.floor(Math.random() * trans1.length)];
			}
			bus1Trans1.innerHTML = newSt1;
		}

		setInterval(updateTrans1, 10000);

/////////////////////////////////////////////////////////////////////////////////////////////////////

var transitCheckpoints = [
			"HIT",
			"TOWN",
			"CHOPPIES",
			"COPPA CABANA"
		];

		function updateTransitStatus1() {
			var bus2TransitStatus = document.getElementById("bus2TransitStatus1");
			var currentStatus = bus2TransitStatus.innerHTML;
			var newStatus = currentStatus;
		if (newStatus == currentStatus) {
				newStatus = transitCheckpoints[Math.floor(Math.random() * transitCheckpoints.length)];
			}
			bus2TransitStatus.innerHTML = newStatus;
		}

	setInterval(updateTransitStatus1, 10000);


		var transitStatuses = [
			"In Transit to Coppa Cabbana",
			"In Transit to Hit ",
			"Hit Rank",
			"Coppa Cabbana"
		];

	
		function updateTransitStatus() {
			var bus2TransitStatus = document.getElementById("bus2TransitStatus");
			var currentStatus = bus2TransitStatus.innerHTML;
			var newStatus = currentStatus;
		if (newStatus == currentStatus) {
				newStatus = transitStatuses[Math.floor(Math.random() * transitStatuses.length)];
			}
			bus2TransitStatus.innerHTML = newStatus;
		}

		setInterval(updateTransitStatus, 10000);
		
		
	</script>
</head>
<body>


<table>
		<thead>
			<tr>
				<th><i class="fas fa-route"></i> Bus Route</th>
				<th><i class="fas fa-id-badge"></i> Bus ID</th>
				<th><i class="fas fa-map-marker-alt"></i> Checkpoints</th>
				<th><i class="fas fa-road"></i> Transit Status</th>
				<th><i class="fas fa-clock"></i> Departure Time</th>
				<th><i class="fas fa-dollar-sign"></i> Price</th>
			</tr>
		</thead>
		<tbody>
		    <?php
$sqlg = "SELECT * FROM buses order by id Desc limit 1";
$sqld = mysqli_query($dbcon,$sqlg) or die('error gettong db');

$ro = mysqli_fetch_array($sqld,MYSQLI_ASSOC);
$BUS1 = $ro["BUS1"];
$BUS2 = $ro["BUS2"];
?>
			<tr>
				<td rowspan="2"><i class="fas fa-bus"></i> BELVEDERE/TOWN</td>
				<td><i class="fas fa-bus"></i> <?php if($BUS1 == 1){echo "BUS1";} 
				if($BUS1 == 2){echo "BUS2";}?></td>
				<td id="<?php if($BUS1 == 1){echo "transee1";}
				
				if($BUS1 == 2){ echo "bus2TransitStatus1";}?>"><i class="fas fa-map-marker-alt"></i> LOADING.....</td>
				<td id="<?php if($BUS1 == 1){echo "transee";}
				
				if($BUS1 == 2){ echo "bus2TransitStatus";}?>"><i class="fas fa-road"></i> LOADING....</td>
				<td><i class="fas fa-clock"></i> 8:00am</td>
				<td><i class="fas fa-dollar-sign"></i> 5</td>
			</tr>
			<tr>
				<td><i class="fas fa-bus"></i> <?php if($BUS2 == 1){echo "BUS1";} 
				if($BUS2 == 2){echo "BUS2";}?></td>
				<td id="<?php if($BUS2 == 1){echo "transee1";}
				
				if($BUS2 == 2){ echo "bus2TransitStatus1";}?>"><i class="fas fa-map-marker-alt"></i> LOADING</td>
				<td id="<?php if($BUS2 == 1){echo "transee";}
				
				if($BUS2 == 2){ echo "bus2TransitStatus";}?>"><i class="fas fa-road"></i> LOADING....</td>
				<td><i class="fas fa-clock"></i> 9:30am</td>
				<td><i class="fas fa-dollar-sign"></i> 4</td>
			</tr>
			<tr>
				<td><i class="fas fa-bus"></i> KUWADZANA/TOWN</td>
				<td><i class="fas fa-bus"></i> BUS3</td>
				<td><i class="fas fa-map-marker-alt"></i> Town</td>
				<td><i class="fas fa-road"></i> Arrived</td>
				<td><i class="fas fa-clock"></i> 10:00am</td>
				<td><i class="fas fa-dollar-sign"></i> 6</td>
	</tr>

	
		</tbody>
	</table>
	
<form method="post">
  <input type="text" name="top" placeholder="Enter top bus_id">
  <input type="text" name="bottom" placeholder="Enter bottom bus_id">
  <a href="index3.php">View Map</a> 
   <a href="index.php">Sign Out</a> 
  <input type="submit" value="submit" name="submit">
	<?php
	if(isset($_POST["submit"]))
	{
	    $TOP = $_POST["top"];
	    $BOTTOM = $_POST["bottom"];
	$add_location_query = $connect->prepare("UPDATE buses SET BUS1=?, BUS2=? WHERE id = '1'");
    $add_location_query->execute($TOP,$BOTTOM);
	}
	?>
	</form>
	
	
</body>
</html>

