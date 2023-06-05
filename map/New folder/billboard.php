<!DOCTYPE html>
<?php include_once('connect.php') ?>
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
			"HIT",
			"TOWN",
			"CHOPPIES",
			"COPPA CABANA"
		];

		function updateTransitStatus1() {
			var bus2TransitStatus = document.getElementById("bus2TransitStatus1");
			var currentStatus = bus2TransitStatus.innerHTML;
			var newStatus = currentStatus;
			while (newStatus == currentStatus) {
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
			while (newStatus == currentStatus) {
				newStatus = transitStatuses[Math.floor(Math.random() * transitStatuses.length)];
			}
			bus2TransitStatus.innerHTML = newStatus;
		}

		setInterval(updateTransitStatus, 5000);
	</script>
</head>
<body>

<?php
/*
	$query=$dbcon->query("select * from blood_bank order by Date_Time ASC");
    
    
	while($row = $query->fetch()){
	
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
				<th><i class="fas fa-id-badge"></i> Bus ID</th>
				<th><i class="fas fa-map-marker-alt"></i> Checkpoints</th>
				<th><i class="fas fa-road"></i> Transit Status</th>
				<th><i class="fas fa-clock"></i> Departure Time</th>
				<th><i class="fas fa-dollar-sign"></i> Price</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td rowspan="2"><i class="fas fa-bus"></i> Route 1</td>
				<td><i class="fas fa-bus"></i> BUS1</td>
				<td><i class="fas fa-map-marker-alt"></i> Hit</td>
				<td><i class="fas fa-road"></i> Coppa Cabbana</td>
				<td><i class="fas fa-clock"></i> 8:00am</td>
				<td><i class="fas fa-dollar-sign"></i> 5</td>
			</tr>
			<tr>
				<td><i class="fas fa-bus"></i> BUS2</td>
				<td id="bus2TransitStatus1"><i class="fas fa-map-marker-alt"></i> Zupco</td>
				<td id="bus2TransitStatus"><i class="fas fa-road"></i> In Transit to Coppa Cabbana</td>
				<td><i class="fas fa-clock"></i> 9:30am</td>
				<td><i class="fas fa-dollar-sign"></i> 4</td>
			</tr>
			<tr>
				<td><i class="fas fa-bus"></i> Route 2</td>
				<td><i class="fas fa-bus"></i> BUS3</td>
				<td><i class="fas fa-map-marker-alt"></i> Town</td>
				<td><i class="fas fa-road"></i> Arrived</td>
				<td><i class="fas fa-clock"></i> 10:00am</td>
				<td><i class="fas fa-dollar-sign"></i> 6</td>
	</tr>

	
		</tbody>
	</table>
</body>
</html>
