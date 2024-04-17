<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail -> CharSet = 'utf-8'




$mail -> isSMTP();  //Set mailer to use SMTP
$mail -> Host = 'smtp.gmail.com';  //Specify main and 
$mail -> SMTPAuth = true;
$mail -> Username = '';    //Наш логин
$mail -> Password = '';     // Наш пароль от ящика
$mail -> SMTPSecure = 'ssl';     //Enable TLS encryption, 'ssl' also accepted
$mail -> Port = 465;     //TCP port to connect to

$mail->setForm('', "Pulse");  //от кого письмо
$mail->addAddress('');
//$mail->addAddress('ellen@example.com');
//$mail->addReplyTo('info@example.com');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');
$mail->isHTML(true);    //Set email format to HTML

$main->subject = 'Данные';
$mail->Body   ='
        Пользователь оставил данные <br>
    Имя: ' . $name . ' <br>
    Номер телефона: '. $phone . '<br>
    E-mail: ' . $email . '';

if(!$mail->send()){
    return false;
} else{
    return true;
}