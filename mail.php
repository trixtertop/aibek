<?php

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'exampleboxmail@gmail.com'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'parol147258'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('exampleboxmail@gmail.com'); // от кого будет уходить письмо?
$mail->addAddress('asel2310@gmail.com');     // Кому будет уходить письмо
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка с KYRGYZ GUIDED TOURS TEAM';
$mail->Body    = '<h3>Имя - ' .$name . '</h3></br><hr><br><h3>Его телефон - ' .$phone. '</h3>';
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location:http://kyrgyzguidedtours.com/thank-you.html');
}
?>
