<?php
// header("Content-Type: text/html; charset=utf-8");

// $refferer = getenv('HTTP_REFERER');
// $phone = htmlspecialchars($_POST["phone"]);
// $subject = htmlspecialchars($_POST["subject"]);
// $tema = "Сообщение с сайта";


// $message_to_myemail = "<b>Заявка с сайта</b> <br>
// 	Заявка из формы: \"$subject\" <br>
// 	<table style='width: 100%;'>
// 	<tr style='background-color: #f8f8f8;'>
// 		<td style='padding: 10px; border: #e9e9e9 1px solid;'>
// 			<b>Номер телефона заявителя:</b>
// 		</td>
// 		<td style='padding: 10px; border: #e9e9e9 1px solid;'>$phone</td>
// 	</tr>
// 	</table><br>";

// $message_to_myemail .= "Источник (ссылка): $refferer";

// $myemail = "dm.minyo@gmail.com"; // e-mail администратора
// $headers = 'From: Михаил Мануилов <dm.minyo@gmail.com>' . "\r\n" . 
// 'MIME-Version: 1.0' . "\r\n".
// 'Content-type: text/html; charset=utf-8' . "\r\n";

// Отправка письма администратору сайта

// mail($myemail, $tema, $message_to_myemail,  $headers, 'we');

header("Content-Type: text/html; charset=utf-8");
$subject = htmlspecialchars($_POST["subject"]);
$name = htmlspecialchars($_POST["name"]);
$tel = htmlspecialchars($_POST["phone"]);

$refferer = getenv('HTTP_REFERER');
$date=date("d.m.y"); // число.месяц.год  
$time=date("H:i"); // часы:минуты:секунды 
$tema = "Новая заявка";
$myemail = "dm.minyo@gmail.com"; // e-mail администратора


// Отправка письма администратору сайта

// $tema = "Тема письма админу";
// $message_to_myemail = "Текст письма:
// <br><br>
// Телефон: $tel<br>
// Источник (ссылка): $refferer
// ";

$message_to_myemail = "<b>Заявка с сайта</b> <br>
Заявка из формы: \"$subject\" <br>
	<table style='width: 100%;'>
		<tr style='background-color: #f8f8f8;'>
		<td style='padding: 10px; border: #e9e9e9 1px solid;'>
			<b>Имя заявителя:</b>
		</td>
		<td style='padding: 10px; border: #e9e9e9 1px solid;'>$name</td>
	</tr>
	<tr style='background-color: #f8f8f8;'>
		<td style='padding: 10px; border: #e9e9e9 1px solid;'>
			<b>Номер телефона заявителя:</b>
		</td>
		<td style='padding: 10px; border: #e9e9e9 1px solid;'>$tel</td>
	</tr>
	</table><br>";

$message_to_myemail .= "Источник (ссылка): $refferer";

mail($myemail, $tema, $message_to_myemail, "From: Manuilov <dm.minyo@gmail.com> \r\n Reply-To: ЭФФЕКТИВНЫЙ МАРКЕТИНГ \r\n"."MIME-Version: 1.0\r\n"."Content-type: text/html; charset=utf-8\r\n" );

?>