<?php
// Создание структуры Базы Данных гостевой книги

const DB_HOST = '';
const DB_LOGIN = '';
const DB_PASSWORD = '';
const DB_NAME = '';

$link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME);
if (!$link) {
    echo 'Ошибка: Невозможно установить соединение с MySQL.' . PHP_EOL;
    echo 'Код ошибки errno: ' . mysqli_connect_errno() . PHP_EOL;
    echo 'Текст ошибки error: ' . mysqli_connect_error() . PHP_EOL;
    exit;
}
mysqli_set_charset($link, 'utf8');
$sql = "
CREATE TABLE msgs (
	id int,
	name varchar(50) NOT NULL default '',
	email varchar(50) NOT NULL default '',
	msg text,
	PRIMARY KEY (id))
ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci";
if (mysqli_query($link, $sql) === true){
    echo 'Структура базы данных успешно создана!';
}
mysqli_close($link);
