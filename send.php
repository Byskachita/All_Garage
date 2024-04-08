<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMail\Exception;
require 'assets/php/src/Exception.php';
require 'assets/php/src/PHPMailer.php';
require 'assets/php/src/SMTP.php';

require 'php/PHPMailer.php';

$mail = new PHPMailer;
$to = "denisse.rossel@todosuministros.cl"; //Nuestro correo de contacto

//Recogemos los datos del formulario
$nombre = $_POST['name'];
$apellido = $_POST['apellido'];
$email = $_POST['correo'];
$mensaje = nl2br($_POST['mensaje']);

if($nombre == "" || $apellido == "" || $email == "" || $mensaje == ""):
    echo '<div class="alert alert-danger">Todos los campos son requeridos para el envío</div>';
else:

    $mail->From = $email;
    $mail->addAddress($to);
    $mail->Subject = $asunto;
    $mail->isHtml(true);
    $mail->Body = '<strong>' .$nombre. '</strong> le ha contactado desde su web, y le ha enviado el siguiente mensaje: <br><p>'.$mensaje.'</p>';
    
    $mail->CharSet = 'UTF-8';
    $mail->send();

endif;

?>


