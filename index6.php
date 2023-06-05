<!DOCTYPE html>

<?php
include("connect44.php");
?>
<html>
<head>
	<title>Bus Ticket Booking System </title>
	<style>
	  table {
    border-collapse: collapse;
    width: 100%;
  }
  th, td {
    text-align: left;
    padding: 8px;
  }
  th ,tbody{
    background-color: #f2f2f2;
  }
  tr:nth-child(even) {
    background-color: blue;
  }
  
		body {
			font-family: Arial, sans-serif;
			background-color: #191970;
		}

		h1 {
			text-align: center;
			color: #444444;
			margin-top: 50px;
		}

		form {
			max-width: 500px;
			margin: 0 auto;
			background-color: #ffffff;
			padding: 20px;
			border-radius: 10px;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
		}

		label {
			display: block;
			font-weight: bold;
			margin-bottom: 10px;
			color: #333333;
		}

		select, input[type="number"],input[type="text"], input[type="submit"] {
			display: block;
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			font-size: 16px;
			border-radius: 5px;
			border: none;
			box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
		}

		input[type="submit"] {
			background-color: #f44336;
			color: #ffffff;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}

		input[type="submit"]:hover {
			background-color: #ef1f12;
		}

		.seats-available {
			margin-top: 20px;
			color: #333333;
			text-align: center;
		}

		.seats-available span {
			font-weight: bold;
		}

		.ticket {
			background-color: #ffffff;
			padding: 20px;
			margin-bottom: 20px;
			border-radius: 10px;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
		}

		.ticket p {
			margin: 0;
			color: #333333;
		}

		.ticket p strong {
			font-weight: bold;
			color: #f44336;
		}
	</style>
</head>
<body>
	<h1>Bus Ticket Reservation System</h1>
            
<table class="table table-striped table-sm">
  <thead>
    <tr>
      <th>NAME</th>
      <th>REG_NUMBER</th>
      <th>TICKET</th>
      <th>SEAT</th>
      <th>AVAILABLE </th>
	  <th> Date </th>
	  <th><a href = "index.php">LOG OUT</a></th>
	  <th><a href = "index5.php">RESET</a></th>
	  

    </tr>
  </thead>
  <tbody>
      <?php
      
      	$query=$connect->query("select * from booking order by id DESC");
    ?>
    
    <?php while($row = $query->fetch()): ?>
    <tr>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['reg_number']; ?></td>
      <td><?php echo $row['ticketno']; ?></td>
      <td><?php echo $row['seat_id']; ?></td>
      <td><?php echo $row['bus_id']; ?></td>
	  <td><?php echo $row['Date']; ?></td>

    </tr>
    <?php endwhile; ?>
  </tbody>
</table>

            </body>
</html>
            
            


