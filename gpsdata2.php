<?php 

require 'config.php';

$lat = $_GET['val'];
$lng = $_GET['vall'];

echo $lat;
echo "<br>";
echo $lng;


$sql = "INSERT INTO tbl_gps7(latitude,longitude,created_date) 
	VALUES('".$lat."','".$lng."','".date("Y-m-d H:i:s")."')";

if($db->query($sql) == FALSE)
	{ echo "Error: " . $sql . "<br>" . $db->error; }

echo "<br>";
echo $db->insert_id;

?>
<?php
/*
$val = $_GET['val'];
$vall = $_GET['vall'];
echo 'From Server-> Received: '.$val;
echo $vall;
echo "zvako zvaita ck";

   // Connecting to Server
        $host = "127.0.0.1:3306";
        $dbname = "u198258808_gpslee";
        $username = "u198258808_gpslee";
        $password = "Leeroyku2";

        
        //Connecting
        try{
        $connect = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
        $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $add_location_stmt = $connect->prepare("UPDATE tbl_gps3 SET latitude=?, longitude=? WHERE ID ='1'");
        $add_location_stmt->execute([$val,$vall]);
        echo "connection successful";
        
        }catch(\Exception $exception){
            echo "failed to connect " ;//. $exception->get_message();
        }
        
       
    
*/
    
    

?>