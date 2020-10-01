<?php
	$email = $_POST['email'];
	$message = $_POST['message'];

	$error = '';
	if(trim($email) == '')
		$error = 'Введите ваш email';
	else if(trim($message) == '')
		$error = 'Введите сообщение';
	else if (strlen($message) < 10) 
		$error = 'Сообщение должно быть длинее 10 символов';

	if ($error !='') {
		echo $error;
		exit;
	}

	$subject = "=?UTF-8?B?".base64_encode("Test")."?=";
	$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=UTF-8\r\n";

	mail('dmitry1303@bk.ru', $subject, $message, $headers);

	header('Location: /about.php');

?>