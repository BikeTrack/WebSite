<?php

$name = $_POST["name"];
$email = $_POST["email"];
$msg = $_POST["msg"];

$message = $msg + ' from ' + 'name\n' + $email;
mb_send_mail('contact@biketrack.eu', 'Message site EIP', $message);


?>