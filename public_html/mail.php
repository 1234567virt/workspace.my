<?php $headers='From:vitte@gmail.ru'."\r\n".
'Replay-To:vitte@bk.com'."\r\n".
'X-Mailer:PHP/'.phpversion();
$message='Поздравляю вас с получением учетной записи на нашем сайте ваш логин ';
echo mail('krupenkosm@bk.ru','Ваш логин и пароль',$message);
echo $message;

?>