<?php
require_once('../engine/SMTP.php');
require_once('../engine/PHPMailer.php');                                 
$mail->From ='krupenkosm@bk.ru';        // От кого будет письмо
$mail->FromName = 'Cthutq';        // Как зовут "от кого"
$mail->addAddress('vitte@bk.ru');         // Куда посылать        
$mail->isHTML(true);                                  
$mail->Subject = 'subject';          // Тема
//Послать сообщение:
$mail->Body = 'message';             // Само письмо

if(!$mail->send()) { 
    $errorAdmin = $mail->ErrorInfo; // Запишем себе ошибку, если не послалось
}
?>