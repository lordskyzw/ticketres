<?php 
define('DB_HOST', '127.0.0.1:3306'); 
define('DB_USERNAME', 'u198258808_gpslee'); 
define('DB_PASSWORD', 'Leeroyku2'); 
define('DB_NAME', 'u198258808_gpslee');

date_default_timezone_set('Asia/Karachi');

// Connect with the database 
$db = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME); 
 
// Display error if failed to connect 
if ($db->connect_errno) { 
    echo "Connection to database is failed: ".$db->connect_error;
    exit();
}
