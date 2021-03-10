<?php
/* Подключение к БД */
require './libs/rb.php';
R::setup(
	'mysql:host=localhost:1234;dbname=myDb',
	'pagetest_user',
	'test'
);
if (!R::testConnection()) {

	exit('No connect');
}

session_start();

/* try {//Код подключения к БД выводящий ошибки
	$db = new PDO('mysql:host=HOSTNAME;dbname=DB_NAME', 'USERNAME', 'PASSWORD');
} catch (PDOException $e) {
	echo $e->getmessage();
} */