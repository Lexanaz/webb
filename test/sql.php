<?php
$host = 'localhost'; // адрес сервера 
$database = 'web'; // имя базы данных
$user = 'root'; // имя пользователя
$password = '12345'; // пароль
$db=mysqli_connect($host, $user, $password, $database) or die('Не удалось подключиться к базе данных!');
?>