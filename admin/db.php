<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname ="portfolio";

    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);

    // Check connection
    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error."check syntax if you see this msg");
    }

    function closedb($conn){
        $conn->close(); 
    }
?>