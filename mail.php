<?php
require "PHPMailer/PHPMailer/PHPMailerAutoload.php";

$mail = new PHPMailer();

$mail->Host = 'smtp.gmail.com';

$mail->SMTPAuth = 'true';

$mail->Username = 'YOUR GMAIL ID';
$mail->Password = 'GMAIL PASSWORD';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;


$mail->SetFrom('FROM EMAIL', 'FROM NAME');
$mail->addAddress('EMAIL FROM THE FORM FIELD');
$mail->addReplyTo('REPLY ADDRESS','REPLY NAME');


$mail->Subject= "SUBJECT FROM FORM FIELD";
$mail->Body='CONTENT OF THE MESSAGE';


if($mail->send()) {
    echo "Mail sent";
} else {
    echo "Mail Not sent";
}
?>