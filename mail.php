<?php 

header('Content-Type: application/json');

$name = $_POST['name'];
$message = "Сообщение от пользователя: $name";

$result = mail('ak1tos@yandex.ru', 'Тема письма:NNNNNNNNNNNN +<>:<m', $message);

echo json_encode(array(
	'status' => $result
));