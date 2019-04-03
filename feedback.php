<?php 

$sendTo   = "titov8victor@yandex.ru"; // Обязательно измените e-mail на свой
//$sendToCc = "victor180188@gmail.com"; // Скрытая копия
$userEmail = $_POST['email'];
$userTel = $_POST['tel'];
$userName = $_POST['name'];



// Формирование заголовка сообщения.
$subject  = "Сообщение с обртной формы сайта BAK-ONE";

// Формируем заголовок письма

$header  = "From: " . strip_tags($userEmail) . "\r\n";
//$header .= "Cc:" . strip_tags( $sendToCc ) . "\r\n";
$header .= "Reply-To: ". strip_tags($userEmail) . "\r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-Type:text/html; charset=utf-8\r\n";
// Формирование тела письма
$msg .= '<html><body style = "background-color: rgb(247, 247, 247); width: 90%; margin: 10px auto; font-family: Arial, Helvetica, sans-serif;">
<h2>Сайт MAY-DONE просьба перезвонить</h2>
<dl><dt><strong>Name:</strong></dt>
<dd>' . $userName . '</dd></dl>
<dl><dt><strong>Email:</strong></dt>
<dd>' . $userEmail . '</dd></dl>
<dl><dt><strong>Number phones:</strong></dt>
<dd>' . $userTel . '</dd></dl>
</body></html>';


// отправка сообщения
if(mail($sendTo, $subject, $msg, $header)) {
    echo "true";    
} else {
	echo "false";
}



?>