<?php
$name = $_POST['name'];
$mail = $_POST['email'];
$message = $_POST['note'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "Su correo es: " . $mail . " \r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'jhonnysq24@gmail.com';
$asunto = 'Mensaje de...';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");
?>