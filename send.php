<?php 
//error_reporting(0); 
$nombre = $_POST['nombre']; 
$mail= $_POST['email'];  
$mensaje=$_POST['message']; 
/*$header = 'From: ' . $mail ."\r\n"; 
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
$header .= "Mime-Version: 1.0 \r\n"; 
$header .= "Content-Type: text/plain";*/


$para="miguelcabezaspuerto@gmail.com";
$asunto="IPOHotjar";

mail($para,$asunto,utf8_decode($mensaje),$header);

?>