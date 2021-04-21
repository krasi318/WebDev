<?php
    $servername = "localhost";
    $username = "root";
    $DBpassword = "";	
    
    $db = new PDO("mysql:host=$servername;dbname=174", $username, $DBpassword);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>