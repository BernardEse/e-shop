<?php
 
 $host = "localhost";

 $dbname = "gallery";

 $user = "root";

 $pass = "";

 $conn = new PDO("mysql:host=$host;dbname=$dbname;", $user, $pass);

 if ($conn == true) {
   // echo 'it is working fine';
 }else {
    echo 'it is not connected';
 }



?>