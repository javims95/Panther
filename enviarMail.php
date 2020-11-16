<?php

    // Incluimos la librería que hemos descargado para enviar los correos.
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    include('php/Mailer/src/PHPMailer.php');
    include('php/Mailer/src/SMTP.php');
    include('php/Mailer/src/Exception.php');

    try {
        // Datos SMTP
        $mail->SMTPDebug = 1;
        $mail->isSMTP();
        $mail->Host       = 'jamusa.es';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'ventas@jamusa.es';
        $mail->Password   = 'Prueba1234';
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 110;

        $mail = new PHPMailer\PHPMailer\PHPMailer(true);
    
        //Destinatario
        $mail->setFrom('ventas@jamusa.es', 'Panther');// Remitente
        $mail->addAddress('javier_ms95@hotmail.com');     // Add a recipient
    
        // Archivos adjuntos
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    
        // Contenido del correo
        $mail->isHTML(true);// Envía el correo en formato HTML
        $mail->Subject = 'Here is the subject';
        $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

?>