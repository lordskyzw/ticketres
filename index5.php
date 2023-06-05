

<!DOCTYPE html>
<html>
<head>


	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Bus Website</title>
	
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/slick.css" type="text/css" /> 
	<link rel="stylesheet" href="css/templatemo-style.css">
  


	<title>UZ BUS TICKET RESERVATION SYSTEM</title>
	<style>
	  table {
	border-collapse: collapse;
	width: 100%;
  }
  th, td {
	text-align: left;
	padding: 8px;
  }
  th {
	background-color: #f2f2f2;
  }
  tr:nth-child(even) {
	background-color: #f2f2f2;
  }
  
		body {
			font-family: Arial, sans-serif;
			background-color: aliceblue;
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
			height: 465px;
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
			background-color: #171790;
			color: #ffffff;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}

		input[type="submit"]:hover {
			background-color: #171790;
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

		#removed-seats {
			position:relative; 
			top:100%;
		}

		#lin{
			text-align: center;
position: absolute;
left: 22.5%;
border-radius:5px;
top:93%;
background-color: #171790;
height:40px;
width: 31%;
		}

		.form-control::placeholder {
			color: black;
			opacity: 0.5;
		}

		#contacts a {
			color: blue;
		}
	</style>
</head>
<body>
	<h1>UZ BUS TICKET RESERVATION</h1>
	

			<div class="page-container">



<div class="container-fluid">
  <div class="row">
	<div class="col-xs-12">
	  <div class="cd-slider-nav">
		<nav class="navbar navbar-expand-lg" id="tm-nav">
		  
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-supported-content" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbar-supported-content">
			  <ul class="navbar-nav mb-2 mb-lg-0">
				<li class="nav-item selected">
				  <a class="nav-link" aria-current="page" href="#0" data-no="1" style = "color: #171790"  onMouseOver="this.style.color='#171790'" 
onMouseOut="this.style.color='#171790'">Ticket Reservation</a>
				  <div class="circle"></div>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="#0" data-no="2" style = "color: #171790"  onMouseOver="this.style.color='#171790'" 
onMouseOut="this.style.color='#171790'">Driver Profiles</a>
				  <div class="circle"></div>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="#0" data-no="3" style = "color: #171790"  onMouseOver="this.style.color='#171790'" 
onMouseOut="this.style.color='#171790'">Locate</a>
				  <div class="circle"></div>
				</li>
			
				<li class="nav-item">
				  <a class="nav-link" href="#0" data-no="4" style = "color: #171790"  onMouseOver="this.style.color='#171790'" 
onMouseOut="this.style.color='#171790'">Contacts & Feedback</a>
				  <div class="circle"></div>
				</li>
			  </ul>
			</div>
		</nav>
	  </div>
	</div>          
  </div>        
</div>


<?php

include('connect.php');
$sqlget = "SELECT * FROM buses order by id DESC";
$sqldata = mysqli_query($dbcon, $sqlget) or die('error gettong db');

$row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC);

$bus3 = $row['bs'];

$bus1 = $row['bus001'];
$bus2 = $row['bus002'];

?>


<?php

$sqlget2 = "SELECT * FROM driver order by id DESC";
$sqldata2 = mysqli_query($dbcon, $sqlget2) or die('error gettong db');

$row2 = mysqli_fetch_array($sqldata2, MYSQLI_ASSOC);
?>


<?php


$driver2 = $row2['driver1'];
$driver1 = $row2['driver2'];
$driver3 = $row2['driver3'];
?>

<!--WELCOME BOX-->      
<div class="container-fluid tm-content-container">
  <ul class="cd-hero-slider mb-0 py-5">
	<li class="px-3" data-page-no="1">
	  <div class="page-width-1 page-left">
		
		
		

<div class="row">
<div class="col-sm-6">
	<form action="pdff.php" method="POST" >
	<input type="text" name="name1" placeholder="Enter name" id = "input-field1">
	<input type="text" name ="reg_number"  id= "input-field2" placeholder="Enter Reg_Number" pattern="[A-Za-z]?\d{6}[A-Za-z]?" required>
	<select id="bus-id" name = "bus-id">
	<option value="">Select a bus</option>
	<option value="bus-1">Bus 1</option>
	<option value="bus-2">Bus 2</option>
	<option value="bus-3">Bus 3</option>
	<option value="bus-4">Bus 4</option>
	<option value="bus-5">Bus 5</option>
	<option value="bus-6">Bus 6</option>
	</select>

	<select id="bus-seats" name= "bus-seats1">
	<option value="">Select a bus first</option>
	</select>

	<div>
		<!--<input type ="text" id="success-message" style="display:none;" value= "Form submitted successfully!" placehoder = "hie"> -->
		<p id="success-message" style="display:none; ">Form submitted successfully!</p>
		<div id="removed-seats"></div>
	</div>
	
	<select id="time" name = "time">
	<option value="">Select Time</option>
	<option value="7:00am">7:00am</option>
	<option value="8:00am">8:00am</option>
	<option value="9:00am">9:00am</option>
	<option value="10:00am">10:00am</option>
	<option value="11:00am">11:00am</option>
	<option value="12:00pm">12:00pm</option>
	<option value="13:00pm">13:00pm</option>
	<option value="14:00pm">14:00pm</option>
	<option value="15:00pm">15:00pm</option>
	<option value="16:00pm">16:00pm</option>
	<option value="17:00pm">17:00pm</option>
	<option value="18:00pm">18:00pm</option>
	<option value="19:00pm">19:00pm</option>

	</select>

	<input type="submit" name="submit" value="Book Ticket">
	<input type="hidden" name="redirect_url" value="index5.php">

	<input type="hidden" id="reset-btn"> 
	<input type="hidden" id = "lee" name = "bus-seats" value="">

	<button type="button" id="clear-button">Clear</button>

	<a style= "color: #171790;"  href="index.php"> Logout</a>

	</form>
	</div>

	<div class="col-sm-6">
		<form action="revoke.php" method="POST" >
			<input type="text" name="name" placeholder="Enter name" id = "input-field1">
			<input type="text" name="reg_number" id="input-field2" placeholder="Enter Reg_Number" pattern="[A-Za-z]?\d{6}[A-Za-z]?" required>
			<select id="bus-num" name="bus-num">
				<option value="">Select bus number</option>
				<option value="bus-1">Bus 1</option>
				<option value="bus-2">Bus 2</option>
				<option value="bus-3">Bus 3</option>
				<option value="bus-4">Bus 4</option>
				<option value="bus-5">Bus 5</option>
				<option value="bus-6">Bus 6</option>
			</select>
			<input id="bus_seat" name="bus_seat" type="text" placeholder="Enter bus seat">
			<input type="submit" name="submit" value="Revoke Ticket">
			<input type="hidden" name="redirect_url" value="index5.php">
			<input type="hidden" id="reset-btn"> 
			<input type="hidden" id = "lee" name = "bus-seats" value="">
			<button type="button" id="clear-button">Clear</button>
			<a style= "color: #171790;"  href="index.php"> Logout</a>
		</form>
	</div>
</div>	
	










		  </div> 
		  <div class="d-flex position-relative tm-border-top tm-border-bottom intro-container">
		  
		 
		
					
	</li>
	<li data-page-no="2">
	 

   <!--DRIVERS=-->
	  <div class="mx-auto position-relative gallery-container">
		<div class="circle intro-circle-1"></div>
		<div class="circle intro-circle-2"></div>
		<div class="mx-auto tm-border-top gallery-slider">
		  <figure class="effect-driver item">
			  <img src="Cp2.PNG" alt="Image">
			  <figcaption>
				  <div>
					  <p>Driver_1</p>
					  <p>0774287324</p>
					  <p><?php echo $bus1; ?></p>
					  <p> location: UZ
					  </p>
				  </div>
				  <a href="#">View more</a>
			  </figcaption>
		  </figure>
		  <figure class="effect-driver item">
			  <img src="Cp2.PNG" alt="Image">
			  <figcaption>
				  <div>
					  <p>Driver_2</p>
					  <p>073872262</p>
					  <p><?php echo $bus2; ?></p>
					  <p> location: UZ
					  </p>
				  </div>
				  <a href="#">View more</a>
			  </figcaption>
		  </figure>
		  <figure class="effect-driver item">
			  <img src="Cp2.PNG" alt="Image">
			  <figcaption>
				  <div>
					   <p>Driver_3</p>
					  <p>0726594876</p>
					  <p><?php echo $bus3; ?></p>
					  <p> location: UZ
					</p>

				  </div>
				  <a href="#">View more</a>
			  </figcaption>
		  </figure>
		  <figure class="effect-driver item">
			  <img src="Cp2.PNG" alt="Image">
			  <figcaption>
				  <div>
					   <p>Driver_5</p>
					  <p>0776452187</p>
					  <p>Bus0001</p>
					  <p> location: UZ
					</p>
				  </div>
				  <a href="#">View more</a>
			  </figcaption>
		  </figure>
		  <figure class="effect-driver item">
			  <img src="Cp2.PNG" alt="Image">
			  <figcaption>
				  <div>
					   <p>Driver_6</p>
					  <p>0715222236</p>
					  <p>Bus0002</p>
					  <p> location: UZ
					</p>
				  </div>
				  <a href="#">View more</a>
			  </figcaption>
		  </figure>
		  <figure class="effect-driver item">
			  <img src="Cp2.PNG" alt="Image">
			  <figcaption>
				  <div>
					  <p>Julia dances in the deep dark</p>
				  </div>
				  <a href="#">View more</a>
			  </figcaption>
		  </figure>
		  <figure class="effect-driver item">
			  <img src="img/gallery-img-07.jpg" alt="Image">
			  <figcaption>
				  <div>
					  <p>Julia dances in the deep dark</p>
				  </div>
				  <a href="#">View more</a>
			  </figcaption>
		  </figure>
		  <figure class="effect-driver item">
			  <img src="img/gallery-img-08.jpg" alt="Image">
			  <figcaption>
				  <div>
					  <p>Julia dances in the deep dark</p>
				  </div>
				  <a href="#">View more</a>
			  </figcaption>
		  </figure>
		  <figure class="effect-driver item">
			  <img src="img/gallery-img-09.jpg" alt="Image">
			  <figcaption>
				  <div>
					  <p>Julia dances in the deep dark</p>
				  </div>
				  <a href="#">View more</a>
			  </figcaption>
		  </figure>
		</div>
	  </div>
	</li>

	 <!--LOCATE A BUS-->
	 <li data-page-no="3" class="px-3">
	 <div class="position-relative page-width-1 page-right tm-border-top tm-border-bottom">
		<div class="circle intro-circle-1"></div>
		<div class="circle intro-circle-2"></div>
		<div class="circle intro-circle-3"></div>
		<div class="circle intro-circle-4"></div>
		<div class="tm-bg-dark content-pad">
		  

		  <div id="div-mapmaker">
		   <i class="fas fa-map-marker-alt fa-spin"></i>
			  </div>
			   <div id="div-locate">
				<form id="frm-locate" method="POST" >
				  <h2 class="mb-4">Enter Bus Details to Locate a Bus</h2>
					<input type="text" name="search" placeholder="Bus Number"><br>
					<!--<input type="text" name="" placeholder="City"><br>-->
					<input type="submit" name="getloc" value="Get Bus Location">
				</form>
			  </div>


			  <?php
			  if (isset($_POST["getloc"])) {
				  $sch = $_POST["search"];
				  if ($sch == "bus1") {
					  // header("location:glen.php");
			  
					  $URL = "glen.php";
					  echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
					  echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
				  }



				  if ($sch == "bus2") {

					  $URL = "southlea.php";
					  echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
					  echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
				  }

				  if ($sch == "bus3") {

					  $URL = "glen.php";
					  echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
					  echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
				  } else

					  echo "not found";


			  }


			  ?>

			  <br><br>
		  <div id="div-searchbusnumber">

				<form method="post" >
				<h3 style="text-align: center;">Forgot Your Bus Number?</h3>
				<br>
				<h4 style="text-align: center;">Search Here</h4>
				<br>
				<input type="text" name="search1" placeholder="Enter Your Bus Destination">
				<input type="submit" name="submiting" value="submit">
				</form>
			  </div>

			  
			  <?php
			  if (isset($_POST["submiting"])) {
				  $sch1 = $_POST["search1"];
				  if ($sch1 == "CHITUNGWIZA") {
					  // header("location:glen.php");
			  
					  $URL = "glen.php";
					  echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
					  echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
				  }



				  if ($sch1 == "HARARE") {

					  $URL = "southlea.php";
					  echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
					  echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
				  }

				  if ($sch1 == "GLENNORAH") {

					  $URL = "glen.php";
					  echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
					  echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
				  } else

					  echo "not found";


			  }


			  ?>
		 
		</div>              
	  </div>

	</li>

	<!--CONTACT US-->

	<li data-page-no="4">
	  <div class="mx-auto page-width-2">
		<div class="row">
		  <!--leave a complain-->
		  

		  </div>
		  <div class="col-md-6 me-0 ms-auto">
			<h2 class="mb-4">Contact Us</h2>
		  </div>
		</div>
		<!--Contact Us Input Form-->
		<div class="row">
		  <div class="intro-left tm-bg-dark">
			<h2 class="mb-4">Leave a Complaint Here</h2>
			<form action="Complains.php" method="POST" class="contact-form">
			   <div class="input-group tm-mb-30">
				  <input name="name" type="text" class="form-control rounded-0 border-top-0 border-end-0 border-start-0" 
					placeholder="Your Name" required="">
					</div>
				 <div>
				  <input name="Email" type="text" class="form-control rounded-0 border-top-0 border-end-0 border-start-0" 
					placeholder="Your Email" required="">
				  </div>
				  <div class="input-group tm-mb-30">
				  <textarea rows="5" name="message" class="textarea form-control rounded-0 border-top-0 border-end-0 border-start-0" placeholder="Your Message"></textarea>
			  </div>
			  <div class="input-group justify-content-end">
				  <input type="submit" class="btn btn-primary tm-btn-pad-2" value="Submit Complaint">
			  </div>
			</form>
		  </div>
		  <!--<div class="col-md-6 tm-contact-left">
			<form action="#" method="POST" class="contact-form">
			  <div class="input-group tm-mb-30">
				  <input name="name" type="text" class="form-control rounded-0 border-top-0 border-end-0 border-start-0" placeholder="Name">
			  </div>
			  <div class="input-group tm-mb-30">
				  <input name="email" type="text" class="form-control rounded-0 border-top-0 border-end-0 border-start-0" placeholder="Email">
			  </div>
			  <div class="input-group tm-mb-30">
				  <textarea rows="5" name="message" class="textarea form-control rounded-0 border-top-0 border-end-0 border-start-0" placeholder="Message"></textarea>
			  </div>
			  <div class="input-group justify-content-end">
				  <input type="submit" class="btn btn-primary tm-btn-pad-2" value="Send">
			  </div>
			</form>
		  </div>-->

		  <div id="contacts" class="col-md-6 tm-contact-right">                  
			<p class="mb-4">
			  UNIVERSITY OF ZIMBABWE
			</p>
			<p class="mb-4">
			  Help and Info Desk
			<div>
			  Email: <a href="mailto:info@company.com" class="tm-link-blue">info.com</a>
			</div>
			<div class="tm-mb-45">
			  Tel: <a href="tel:0100200340" class="tm-link-blue">077-0000000</a>
			</div>
			<!-- Map -->
			<div class="map-outer">
			  <div class="gmap-canvas">
				  <iframe width="100%" height="400" id="gmap-canvas"
					  src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed"
					  frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
			  </div>
		  </div>
		  </div>
		</div>
	  </div>            
	</li>
  </ul>
</div>

</div>
<!-- Preloader, https://ihatetomatoes.net/create-custom-preloading-screen/ -->
<div id="loader-wrapper">            
<div id="loader"></div>
<div class="loader-section section-left"></div>
<div class="loader-section section-right"></div>
</div>  
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slick.js"></script>
<script src="js/templatemo-script.js"></script>

<script>
  const busSeatsOriginal = {
	"bus-1": [...Array(60).keys()].map(i => `A${i+1}`),
	"bus-2": [...Array(60).keys()].map(i => `B${i+1}`),
	"bus-3": [...Array(60).keys()].map(i => `C${i+1}`),
	"bus-4": [...Array(60).keys()].map(i => `D${i+1}`),
	"bus-5": [...Array(60).keys()].map(i => `E${i+1}`),
	"bus-6": [...Array(60).keys()].map(i => `F${i+1}`)
  };
  
  const busIdSelect = document.getElementById("bus-id");
  const busSeatsSelect = document.getElementById("bus-seats");
  const resetBtn = document.getElementById("reset-btn");
  

  let seats = [];
  
  busIdSelect.addEventListener("change", () => {
	const selectedBusId = busIdSelect.value;
	seats = busSeatsOriginal[selectedBusId].slice(); // make a copy
	
	// Remove existing options
	while (busSeatsSelect.firstChild) {
	  busSeatsSelect.removeChild(busSeatsSelect.firstChild);
	}
	
	// Add new options
	if (seats) {
	  seats.forEach(seat => {
		const option = document.createElement("option");
		option.value = seat;
		option.textContent = seat;
		busSeatsSelect.appendChild(option);
	  });
	} else {
	  const option = document.createElement("option");
	  option.value = "";
	  option.textContent = "Select a bus first";
	  busSeatsSelect.appendChild(option);
	}
  });
  
  resetBtn.addEventListener("click", () => {
	const selectedBusId = busIdSelect.value;
	seats = busSeatsOriginal[selectedBusId].slice(); // make a copy
	
	// Remove existing options
	while (busSeatsSelect.firstChild) {
	  busSeatsSelect.removeChild(busSeatsSelect.firstChild);
	}
	
	// Add new options
	if (seats) {
	  seats.forEach(seat => {
		const option = document.createElement("option");
		option.value = seat;
		option.textContent = seat;
		busSeatsSelect.appendChild(option);
	  });
	} else {
	  const option = document.createElement("option");
	  option.value = "";
	  option.textContent = "Select a bus first";
	  busSeatsSelect.appendChild(option);
	}
  });
  
  busSeatsSelect.addEventListener("change", () => {
	const selectedSeat = busSeatsSelect.value;
	if (selectedSeat) {
	  const index = seats.indexOf(selectedSeat);

	  if (index > -1){
	 // seats.splice(index, 1);
	 const removedSeat = seats.splice(index, 1)[0]; // remove the seat and get the removed seat
	  const removedSeatsDiv = document.getElementById("removed-seats"); // get the removed seats div
	 
	  const inputFielda = document.getElementById('input-field1');
	const inputFieldb = document.getElementById('input-field2');
	const inputFieldc = document.getElementById('success-message');
	


const clearButton = document.getElementById('clear-button');

clearButton.addEventListener('click', () => {
  inputFielda.value = '';
  inputFieldb.value = '';
  inputFieldc.textContent = ''; 
  removedSeatsDiv.textContent = ``;
	  document.getElementById("lee").value = removedSeat;
});

	  // update the removed seats div with the removed seat
	  removedSeatsDiv.textContent = `seat successfully selected  ${removedSeat}`;
	  document.getElementById("lee").value = removedSeat;
  
  // Remove existing options
  while (busSeatsSelect.firstChild) {
	busSeatsSelect.removeChild(busSeatsSelect.firstChild);
  }
  
  // Add new options
  seats.forEach(seat => {
	const option = document.createElement("option");
	option.value = seat;
	option.textContent = seat;
	busSeatsSelect.appendChild(option);
  });
}
}
	});

</script>

<script>

	</script>

			</body>
</html>
			
			


