<?php

require_once "../root.php";
require_once "db.php";


$sql = "SELECT * FROM skills ";


$result = $conn->query($sql)->fetch_All(MYSQLI_ASSOC);
// var_dump($result);
// die();
echo json_encode($result);

die();

