<?php

if(!$_POST)
{
	echo 'Are you kidding...';
	header("Location: admin");
}

require_once "../root.php";
require_once "db.php";
extract($_POST);


$sql = "INSERT INTO skills (area, percentage)
VALUES ('$area', '$percentage')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


die();

