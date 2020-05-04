<meta http-equiv='refresh' content='3; url=https://you-hands.ru'>
<meta charset="UTF-8" />
<?php

	if (isset($_POST['name']) && $_POST['name'] != "")
		$name = $_POST['name'];
	else die ("Не заповнене поле \"Імя\"");

	if (isset($_POST['email']) && $_POST['email'] != "")
		$email = $_POST['email'];
	else die ("Не заповнене поле \"Email\"");

	if (isset($_POST['message']) && $_POST['message'] != "") 
		$body = $_POST['message'];
	else die ("Не заповнене поле \"Повідомлення\"");
	 


	$address = "nevskiyoleksandr@gmail.com";
	$mes  = "Ім'я: $name \n";	
	$mes .= "Email: $email \n";
 	$mes .= "Повідомлення: $body"; 
	$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");

	if ($send) 
		echo "Повідомлення відправлено успішно! Повернутися на <a href='index.html'>сайт</a>, якщо це не вийшло автоматично.";
	else 
		echo "Помилка, повідомлення не відправлене! Можливо, проблеми на сервері";
		 
?>