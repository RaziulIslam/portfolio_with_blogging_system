<?php

    require_once "../root.php";
    require_once "db.php";

    $sql = "SELECT * FROM reference ";
    $result = $conn->query($sql)->fetch_All(MYSQLI_ASSOC);

    echo json_encode($result);
    die();