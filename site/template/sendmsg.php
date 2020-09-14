<?php
require_once "../../root.php";
/* get blog list from DB */
//require_once "../../admin/db.php";
extract($_POST);
$to      = '$email';
$subject = '$subject';
$message = '$message';
$headers = 'From: $useremail' . "\r\n" .
    'Reply-To: $email' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);


?>
