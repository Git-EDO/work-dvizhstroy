<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';
$mail->setLanguage('ru', 'phpmailer/language/');
$mail->IsHTML(true);

$mail->setFrom('info@dvizhstroy.ru', 'ДвижСтрой');
$mail->addAddress('dvizhstroy@yandex.ru');
$mail->addReplyTo('info@dvizhstroy.ru', 'ДвижСтрой');
$mail->Subject = 'Заявка с сайта dvizhstroy.ru';

$body = '<h1>Данные пользователя:</h1>';

if(trim(!empty($_POST['name']))) {
    $body.='<p><strong>Имя:</strong> '.$_POST['name'].'</p>';
}
if(trim(!empty($_POST['phone']))) {
    $body.='<p><strong>Телефон:</strong> '.$_POST['phone'].'</p>';
}

$mail->Body = $body;

if(!$mail->send()) {
    $message = 'Ошибка!';
} else {
    $message = 'Данные отправлены!';
}

$response = ['message' => $message];

header('Content-type: application/json');
echo json_encode($response);

?>
