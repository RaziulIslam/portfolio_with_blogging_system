<?php

require_once "../root.php";

require_once "db.php";

$profile_sql ="SELECT * FROM profile";

$result = $conn->query($profile_sql)->fetch_All(MYSQLI_ASSOC)[0];

extract($result);









