<?php

require("PHPMailer/PHPMailerAutoload.php");
 //Crear instancia
 $mail = new PHPMailer(true);
 $mail -> CharSet = "UTF-8";
 //definir que usaremos SMTP y las configuraciones por defecto
 $mail->isSMTP();
 $mail->isHTML(true);
 //$mail->Host = 'smtp.office365.com';
$mail->Host = 'smtp.gmail.com';
 $mail->Port = '587';
 $mail->SMTPSecure = 'tls';
 $mail->SMTPAuth   = true;
 //datos para iniciar sesion smtp
 $mail->Username   = 'claudio.quev92@gmail.com';
 $mail->Password   = 'peskapo12';
 ///datos de quien lo envia, en este caso un BOT
 $mail->setFrom('claudio.quev92@gmail.com', 'Interaction Energy Calculation Tool new account');
 $mail->addAddress('claudio.quev92@gmail.com', 'Claudioxdxd');
 //Definimos el tema del email
 $mail->Subject = 'Interaction Energy Calculation Tool new account';
 $mail->Body  = "asd";
 //La funcion altbody es para cuando se envia texto plano en caso de que no acepte un html maqueteado;
 $mail->AltBody ="<p>asd</p>";
 //Enviamos el correo
 $mail->Send();
 ?>
