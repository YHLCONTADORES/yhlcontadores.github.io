<?php
$name = $_POST['nombre'];
$mail = $_POST['email'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "Su email es: " . $email . " \r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'yhlcontadores@gmail.com';
$asunto = 'Mensaje de... (yhlcontadores)';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:contact.html");
?>
