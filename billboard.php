<!DOCTYPE html>
<?php
   
 include('connect.php');
 $sqlget = "SELECT * FROM buses order by id DESC";
 $sqldata = mysqli_query($dbcon,$sqlget) or die('error gettong db');

 $row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC);

 $bus4 = $row['bs'];

 $bus1 = $row['bus001']; 
$bus2 = $row['bus002'];

 ?>

<?php
  
   $sqlget2 = "SELECT * FROM driver order by id DESC";
   $sqldata2 = mysqli_query($dbcon,$sqlget2) or die('error gettong db');
  
   $row2 = mysqli_fetch_array($sqldata2,MYSQLI_ASSOC);
   ?>


<?php


$driver2 = $row2['driver1'];
$driver1 = $row2['driver2'];
$driver3 = $row2['driver3'];
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
	</style>
	<script>

var transitCheckpoints = [
			"<?Php echo $bus1; ?>",
			"<?Php echo $bus1; ?>"
			
		];

		function updateTransitStatus1() {
			var bus2TransitStatus1 = document.getElementById("bus2TransitStatus1");
			var currentStatus = bus2TransitStatus1.innerHTML;
			var newStatus = currentStatus;
		if(newStatus == currentStatus) {
				newStatus = transitCheckpoints[Math.floor(Math.random() * transitCheckpoints.length)];
			}
			bus2TransitStatus1.innerHTML = newStatus;
		}

		setInterval(updateTransitStatus1, 5000);

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		var transitStatuses = [
			"<?Php echo $driver1; ?>",
			"<?Php echo $driver1; ?>"
		];

		function updateTransitStatus() {
			var bus2TransitStatus = document.getElementById("bus2TransitStatus");
			var currentStatus = bus2TransitStatus.innerHTML;
			var newStatus = currentStatus;
		if(newStatus == currentStatus) {
				newStatus = transitStatuses[Math.floor(Math.random() * transitStatuses.length)];
			}
			bus2TransitStatus.innerHTML = newStatus;
		}

		setInterval(updateTransitStatus, 5000);
		////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		
		var transitStatuses2 = [
			"<?Php echo $bus2; ?>",
			"<?Php echo $bus2; ?>"
		];

		function updateTransitStatus2() {
			var bus2TransitStatus2 = document.getElementById("bus2TransitStatus2");
			var currentStatus = bus2TransitStatus2.innerHTML;
			var newStatus = currentStatus;
		if(newStatus == currentStatus) {
				newStatus = transitStatuses2[Math.floor(Math.random() * transitStatuses2.length)];
			}
			bus2TransitStatus2.innerHTML = newStatus;
		}

		setInterval(updateTransitStatus2, 5000);
		////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		

		var transitStatuses3 = [
			"<?Php echo $bus4; ?>",
			"<?Php echo $bus4; ?>"
		];

		function updateTransitStatus3() {
			var bus2TransitStatus3 = document.getElementById("bus2TransitStatus3");
			var currentStatus1 = bus2TransitStatus3.innerHTML;
			var newStatus1 = currentStatus1;
		if(newStatus1 == currentStatus1) {
				newStatus1 = transitStatuses3[Math.floor(Math.random() * transitStatuses3.length)];
			}
			bus2TransitStatus3.innerHTML = newStatus1;
		}

		setInterval(updateTransitStatus3, 5000);

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		


		var transitStatuses4 = [
			"<?Php echo $driver2; ?>",
			"<?Php echo $driver2; ?>"
		];

		function updateTransitStatus4() {
			var bus2TransitStatus4 = document.getElementById("bus2TransitStatus4");
			var currentStatus = bus2TransitStatus4.innerHTML;
			var newStatus = currentStatus;
		if(newStatus == currentStatus) {
				newStatus = transitStatuses4[Math.floor(Math.random() * transitStatuses4.length)];
			}
			bus2TransitStatus4.innerHTML = newStatus;
		}

		setInterval(updateTransitStatus4, 5000);
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		

		var transitStatuses5 = [
			"<?Php echo $driver3; ?>",
			"<?Php echo $driver3; ?>"
		];

		function updateTransitStatus5() {
			var bus2TransitStatus5 = document.getElementById("bus2TransitStatus5");
			var currentStatus = bus2TransitStatus5.innerHTML;
			var newStatus = currentStatus;
		if(newStatus == currentStatus) {
				newStatus = transitStatuses5[Math.floor(Math.random() * transitStatuses5.length)];
			}
			bus2TransitStatus5.innerHTML = newStatus;
		}

		setInterval(updateTransitStatus5, 5000);
		
		///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	</script>
</head>
<body>

<?php
/*
	$query=$dbcon->query("select * from blood_bank order by Date_Time ASC");
    
    
if($row = $query->fetch()){
	
    $day = $row['Date_Time'];
    $pow= $row['NAME'];
    $temp= $row['SURNAME'];
    $loc= $row['AGE'];
    $prox= $row['blood_type'];
	  <tr>
             <td><?php echo $day; ?></td>
            <td><?php echo $pow;?></td>
            <td><?php echo $temp;?></td>
            <td><?php echo $loc; ?></td>
            <td><?php echo $prox;?></td>
            </tr>      
	<?php } ?>		
          




	$host = "localhost";
    $dbname = "blood_bank";
    $username = "root";
    $password = "";

    //Connecting
    
    $connect = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
    $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);



    $add_location_query = $connect->prepare("INSERT INTO  blood_bank SET NAME=?, SURNAME=? , AGE=?, blood_type=? ");
   // $add_location_query->execute([$C1,$C2,$C3,$C4]);
   $add_location_query->execute([$NAME,$SURNAME,$AGE,$blood_type]); 

*/
  ?>
<table>
		<thead>
			<tr>
				<th><i class="fas fa-route"></i> Bus Route</th>
				<th><i class="fas fa-id-badge"></i> Driver ID</th>
				<th><i class="fas fa-map-marker-alt"></i> Bus Allocated</th>
				<th><i class="fas fa-road"></i> Bus Route</th>
				<th><i class="fas fa-clock"></i> Departure Time</th>
				<th><i class="fas fa-dollar-sign"></i> Price</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td rowspan="2"><i class="fas fa-bus"></i> Route 1</td>
				<td><i class="fas fa-bus"></i> Azariah</td>
				<td id="bus2TransitStatus2"><i class="fas fa-map-marker-alt"></i> bus001</td>
				<td id="bus2TransitStatus4"><i class="fas fa-road"></i> Town</td>
				<td><i class="fas fa-clock"></i> 8:00am</td>
				<td><i class="fas fa-dollar-sign"></i> 5</td>
			</tr>
			<tr>
				<td><i class="fas fa-bus"></i> Ranchodas</td>
				<td id="bus2TransitStatus1"><i class="fas fa-map-marker-alt"></i> bus002</td>
				<td id="bus2TransitStatus"><i class="fas fa-road"></i> Chitungiwza</td>
				<td><i class="fas fa-clock"></i> 9:30am</td>
				<td><i class="fas fa-dollar-sign"></i> 4</td>
			</tr>
			<tr>
				<td><i class="fas fa-bus"></i> Route 2</td>
				<td><i class="fas fa-bus"></i> Blaize</td>
				<td id="bus2TransitStatus3"><i class="fas fa-map-marker-alt"></i> Bus003</td>
				<td id="bus2TransitStatus5"><i class="fas fa-road"></i> Gweru</td>
				<td><i class="fas fa-clock"></i> 10:00am</td>
				<td><i class="fas fa-dollar-sign"></i> 6</td>
	</tr>

	
		</tbody>




	</table>

	<form method = "post">
<input type ="text" name= "driver1" placeholder = "bus for driver 1">
<input type ="text" name= "driver2" placeholder = "bus for driver 2">
<input type ="text" name= "driver3" placeholder = "bus for driver 3">
<input type="submit" name = "submit" value = "submit">
</form>
<?php
if(isset($_POST["submit"]))
{
	
	$bs1 = $_POST["driver1"];
	$bs2 = $_POST["driver2"];
	$bs3 = $_POST["driver3"];
	

	$host = "127.0.0.1:3306";
    $dbname = "u198258808_busdata";
    $username = "u198258808_busdata";
    $password = "Leeroyku2";
    

    //Connecting
    
    $connect = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
    $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);



    $add_location_query = $connect->prepare("INSERT INTO  buses SET bus001=? , bus002=?, bs=? ");
   // $add_location_query->execute([$C1,$C2,$C3,$C4]);
   $add_location_query->execute([$bs2,$bs1,$bs3]); 

}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>


<form method = "post">
<input type ="text" name= "addr1" placeholder = "route for driver 1">
<input type ="text" name= "addr2" placeholder = "route for driver 2">
<input type ="text" name= "addr3" placeholder = "route for driver 3">
<input type="submit" name = "submit2" value = "submit">
</form>
<?php
if(isset($_POST["submit2"]))
{
	
	$bs11 = $_POST["addr1"];
	$bs22 = $_POST["addr2"];
	$bs33 = $_POST["addr3"];
	

	$host = "127.0.0.1:3306";
    $dbname = "u198258808_busdata";
    $username = "u198258808_busdata";
    $password = "Leeroyku2";
    
   

    //Connecting
    
    $connect = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
    $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);



    $add_location_query = $connect->prepare("INSERT INTO  driver SET driver1=? , driver2=?, driver3=? ");
   // $add_location_query->execute([$C1,$C2,$C3,$C4]);
   $add_location_query->execute([$bs22,$bs11,$bs33]); 

}
?>


<button onclick="window.location.href='map/index2.php'">
      MAPS
    </button>
</body>
</html>
