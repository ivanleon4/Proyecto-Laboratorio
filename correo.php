<?php
//include_once('cnx/conexion.php');

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
/*     $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
 */ $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'ivanjleonm7@gmail.com';                     // SMTP username
    $mail->Password   = '11172882';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('ivanjleonm7@gmail.com', 'LEON LABORATORIO');
    $mail->addAddress('ivanjleon4@hotmail.com');     // Add a recipient
    /* $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com'); */

    // Attachments
    $mail->addAttachment('../examen.pdf');         // Add attachments

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Resultados del examen realizado por LEON LABORATORIO';
    $mail->Body    = 'Saludos, en el archivo adjunto se encuentra en PDF los resultados, gracias por preferirnos';

    $mail->send();
    echo "<script> alert('Correo enviado correctamente. por favor cierre la pagina.') </script>";
    echo '<a href="../index.php"> Regresar a pagina principal</a>';
    } catch (Exception $e) {
         echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
?>