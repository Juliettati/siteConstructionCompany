<?php 
	$name = htmlspecialchars($_POST['name']);
	$email = htmlspecialchars($_POST['email']);
	$subject = htmlspecialchars($_POST['subject']);
	$message = htmlspecialchars($_POST['message']);
	if ($name == '' || $email == '' || $subject == '' || $message =='') {
		echo "Запам'ятайте всі поля";
		exit;
	}
	//Відправка
	$subject = "=?utf-8?B?".base64_encode($subject)."?=";
	$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";
	if(mail("juliettati2@gmail.com", $subject, $message, $headers))
		echo "Повідомлення відправлено";
	else 
		echo "Повідомлення не відправлено";
?>

