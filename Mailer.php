<?php
// importamos las librerías
require 'src/PHPMailer.php';
require 'src/SMTP.php';
require 'src/Exception.php';

// hacemos una instancia para tener acceso a las librerías
$mail = new PHPMailer\PHPMailer\PHPMailer();

$body = "<div class='container' style='width: 100%;height: 100vh;background: white;display: inline-block;margin: 0px;padding: 0px;font-family: Arial, Helvetica, sans-serif;'>
<div class='cont_1' style='width: 600px;height: 700px;background: #5693DB;margin: 20px auto 0px auto;display: block;color: white;padding: 10px 0px;'>
    <img src='https://i.postimg.cc/2yG8HmXL/CIBB.png' style='display: block;height: auto;width: 200px;margin: 20px auto 20px auto;'>
    <hr class='short' style='border: none;height: 1px;background: #8EDF4A;margin: 0px auto;width: 200px;'>
    <hr class='long' style='border: none;height: 1px;background: #8EDF4A;margin: 0px auto;width: 90%;'>
    <div class='cont_1_1' style='width: 90%;margin: 0px auto;display: block;'>
        <p class='greeting' style='display: block;color: #8EDF4A;font-size: 20px;margin: 20px auto;text-align:center;'>Hola Edgar_Aggre!</p>
        <p class='text' style='margin: 0px;'>Este es el código de CIBB que necesitas para crear tu cuenta:</p>
        <div class='code' style='width: 300px;height: 80px;background: #36393F;margin: 40px auto;display: flex;'>
            <h1 style='margin: auto;'>65CVS7</h1>
        </div>
        <p class='text' style='margin: 0px;'>Este email se ha generado debido a un intento de creacionde cuenta desde una PC o dispositivo móvil.
        <br>
        <br>
        Si no estas intentando crear una cuenta en CIBB, le recomendamos tomar medidas, ya que alguien esta utilizando tu gamil.
        <br>
        Sin embargo no corres ningun tipo de riesgo por que solo se utilizo el nombre de gmail.
        </p>
    </div>
</div>
<div class='cont_2' style='width: 600px;height: 200px;margin: 20px auto;display: block;'>
    <p style='width: 75%;margin: auto;'>Esta notificación se ha enviado a la dirección decorreo electrónico asociada a tu cuenta de CIBB.</p>
    <br>
    <p style='width: 75%;margin: auto;'>Este correo electrónico se genera automáticamente. Por favor, no respondas a él. Si necesitas ayuda adicional, por favor, contacte  con nuestro equipo de soporte.</p>
    <br>
    <a href='www.cibb.net' style='display:flex;width: 75%;margin: auto;'>www.cibb.net</a>
</div>
</div>";

//configuración principal basica
try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'My_Email';
    $mail->Password = 'Password';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // datos del gmail
    $mail->setFrom('My_Email', 'CIBB');
    $mail->addAddress('Destination_Email', 'User');
    $mail->isHTML(true);
    $mail->Subject = 'Hola, esto es el asunto';
    $mail->Body = $body;
    $mail->send();
} catch(Exception $e){
    echo "No se pudo enviar el mensaje. Error de envío: {$mail->ErrorInfo}";
}