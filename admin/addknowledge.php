<?php

    if(!$_POST){
        echo 'Are you kidding...';
        header("Location: admin");
    }

    require_once "../root.php";
    require_once "db.php";
    extract($_POST);

    $sql = "INSERT INTO knowledge (title, short_info, icon)
    VALUES ('$title', '$short_info', '$icon')";

    if($conn->query($sql) === TRUE){
        echo "New record created successfully";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    die();