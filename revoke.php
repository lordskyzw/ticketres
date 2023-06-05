<?php
	// Include the TCPDF library
    include('connect44.php');

    // Get the inputted data
    $name = $_POST['name'];//$_POST['name'];
    $bus_num = $_POST['bus-num'];//$busValue;
    $bus_seat = $_POST['bus_seat'];//$_POST['reg_number'];
    $reg = $_POST['reg_number'];
    

    $add_location_query = $connect->prepare("delete from booking where name=? AND bus_id=? AND seat_id=? AND reg_number=?");
    // $add_location_query->execute([$C1,$C2,$C3,$C4]);
    $add_location_query->execute([$name,$bus_num,$bus_seat,$reg]); 

	header("Location:index5.php");

?>