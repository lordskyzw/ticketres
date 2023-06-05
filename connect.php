<?php

/*
    /*Connecting to Server*/
       //$host = "localhost";
       /// $dbname = "u198258808_busdata";
     // $username = "root";
      // $password = "";
        
        //Connecting
      //  $dbcon  = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
    //    $dbcon ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

     DEFINE('DB_USER','root');
     DEFINE('DB_PSWD','');
     DEFINE('DB_HOST','localhost');
     DEFINE('DB_NAME','u198258808_busdata');

     $dbcon = mysqli_connect(DB_HOST,DB_USER,DB_PSWD,DB_NAME);
     
     
?>