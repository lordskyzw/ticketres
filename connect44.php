<?php


    /*Connecting to Server*/
        $host = "localhost";
        $dbname = "u198258808_busdata";
      $username = "root";
        $password = "";
        
        //Connecting
        $connect = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
      $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

     //DEFINE('DB_USER','u868591432_leeroy');
     //DEFINE('DB_PSWD','Leeroyku2');
    // DEFINE('DB_HOST','127.0.0.1:3306');
     //DEFINE('DB_NAME','u868591432_current');


//     $dbcon = mysqli_connect(DB_HOST,DB_USER,DB_PSWD,DB_NAME);

?>