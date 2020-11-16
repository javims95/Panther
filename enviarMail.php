<?php

    // Incluimos la librería que hemos descargado para enviar los correos.
    include('php/Mailer/src/PHPMailer.php');
    include('php/Mailer/src/SMTP.php');
    include('php/Mailer/src/Exception.php');

    $mail = new PHPMailer\PHPMailer\PHPMailer();
    try {

        // Datos del destinatario
        $emailTo = $_POST["f_email"];
        $subject = $_POST["f_subject"];
        $bodyEmail = $_POST["f_messaje"];

        // Datos del correo remitente
        $fromemail = "ventas@jamusa.es";
        $fromname = "Panther";
        $host = "mail.jamusa.es";
        $port = "25";
        $SMTPAuth = "login";
        $SMTPSecure = "tls";
        $password = "Prueba1234";

        $mail->isSMTP();
        $mail->SMTPDebug = 1;
        $mail->Host = $host;
        $mail->Port = $port;
        $mail->SMTPAuth = $SMTPAuth;
        $mail->SMTPSecure = $SMTPSecure;
        $mail->Username = $fromemail;
        $mail->Password = $password;

        $mail->setFrom($fromemail, $fromname);
        $mail->addAddress($emailTo);

        // Asunto
        $mail->isHTML(true);
        $mail->Subjet = $subject;
        // Cuerpo del correo
        $mail->Body = $bodyEmail;

        if (!$mail->send()) {
            echo ("MAILER: No se pudo enviar el correo !");
        }
        return true;


    }
    catch (Exception $e) {

    }

?>