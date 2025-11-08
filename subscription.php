<?php
$submail = $_POST['email'];



$to = 'themewar@gmail.com';
$subject = 'Eovo Subscribe';

$message = '<strong>Email Address : </strong>'.$submail.'<br/><br/>';

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <'.$submail.'>' . "\r\n";

mail($to,$subject,$message,$headers);
echo 1;