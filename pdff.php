<html>
<?php
	// Include the TCPDF library
	require_once('tcpdf/tcpdf.php');
    include('connect44.php');

?>

<body>


<?php



                // Get the inputted data
                $name = $_POST['bus-id'];//$_POST['name'];
                $email = $_POST['bus-seats'];//$busValue;
                $message = $_POST['name1'];//$_POST['reg_number'];
                $reg = $_POST['reg_number'];
				$TIME = $_POST['time'];
				$myTicket = generateTicket();
				

                $add_location_query = $connect->prepare("INSERT INTO  booking SET name=?, bus_id=? , seat_id=? , reg_number=?, ticketno=?");
       // $add_location_query->execute([$C1,$C2,$C3,$C4]);
       $add_location_query->execute([$message,$name,$email,$reg,$myTicket]); 


	   
      
	
                // Generate the PDF file
                generatePDF($name, $email, $message, $reg,$myTicket,$TIME );
    
                // Display a message
                echo "<p>Data saved as PDF.</p>";

				






?>




<?php

function generateTicket() {
	// Generate a random ticket number
	$ticketNumber = rand(0, 999999999);
	return $ticketNumber;
  }
  

// Define a function to generate the PDF file
	function generatePDF($name, $email, $message, $reg, $myTicket, $TIME) {
		// Create a new TCPDF object
		$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

		// Set document information
		//$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor('AMANDA');
		$pdf->SetTitle('bus ticket');
		$pdf->SetSubject('bus_id');
		$pdf->SetKeywords('Input Form Data, PDF');

		// Set default header data
		$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH);

		// Set header and footer fonts
		$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
		$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

		// Set default monospaced font
		$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

		// Set margins
		$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
		$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
		$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

		// Set auto page breaks
		$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

		// Add a page
		$pdf->AddPage();

		// Set font
		$pdf->SetFont('helvetica', 'B', 16);

		// Write the data to the PDF file
		$pdf->Write(0, "Input Form Data\n\n", '', 0, 'C', true);
		$pdf->SetFont('helvetica', '', 12);
		$pdf->Write(0, "BUS ID: $name\n", '', 0, 'L', true);
		$pdf->Write(0, "BUS SEAT: $email\n", '', 0, 'L', true);
		$pdf->Write(0, "NAME: $message\n", '', 0, 'L', true);
        $pdf->Write(0, "REG NUMBER: $reg\n", '', 0, 'L', true);
		$pdf->Write(0, "TICKET NUMBER: $myTicket\n", '', 0, 'L', true);
		$pdf->Write(0, "BOARDING TIME: $TIME\n", '', 0, 'L', true);
		$pdf->Write(0, "\n", '', 0, 'L', true);
		$pdf->Write(0, "\n", '', 0, 'L', true);
		$pdf->Write(0, "\n", '', 0, 'L', true);
		$pdf->Write(0, "\n", '', 0, 'L', true);
		$pdf->Write(0, "ATTENTION: Student to be at bus terminus 10 minutes before boarding time!  \n", '', 0, 'L', true);

		// Output the PDF file

		ob_end_clean(); // clean output buffer

		
		$pdf->Output('input_form_data.pdf', 'D');

		//$redirect_url = $_POST['redirect_url']. '?success=true';
		///header("Location:index5.php");
		exit; // terminate script
	}

    ?>

</body>

</html>

    