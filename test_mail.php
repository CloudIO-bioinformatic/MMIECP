<?php
echo "llega aca1<br>";
require("PHPMailer/PHPMailerAutoload.php");
echo "llega aca1<br>";
 $nombre="asd";
 $apellido="asdasd";
 $correo="asdasd";
 $institucion="asdasdasd";
 $pais="asdasdasd";
echo "llega aca2<br>";
 //se junta todo
 $body = "<h3>Hola Fabian, este correo proviene desde Register a new account en el servicio Interaction Energy Calculation Tool</h3><br>"
 ."Sus datos son los siguientes:<br>"
 ."Nombres: " . $nombre."<br>"
 ."Apellidos: " . $apellido."<br>"
 ."Correo: " . $correo."<br>"
 ."Institución: " . $institucion."<br>"
 ."País: " . $pais."<br><br>"
 ."<h2><b>No responda este mensaje, es un mensaje automático y no es necesario responder.</b></h2>";
 echo "llega aca3<br>";
 //Crear instancia
 $mail = new PHPMailer(true);
 $mail -> CharSet = "UTF-8";
 echo "llega aca";
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
 //datos de quien lo envia, en este caso un BOT de las practicas
 $mail->setFrom('claudio.quev92@gmail.com', 'Interaction Energy Calculation Tool new account');
 $mail->addAddress('claudio_frost@hotmail.com', 'Claudioxdxd');
 //Definimos el tema del email
 $mail->Subject = 'Interaction Energy Calculation Tool new account';
 $mail->Body  = $body;
 //La funcion altbody es para cuando se envia texto plano en caso de que no acepte un html maqueteado;
 $mail->AltBody =$body;
 //Enviamos el correo
 $mail->send();
?>
