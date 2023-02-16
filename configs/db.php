<?php
// подключение к БД 
	$servername = "127.0.0.1";
    $database = "e_blog_php";
    $username = "root";
    $password = "";
    // Создаем соединение
    $conn = new mysqli($servername, $username, $password, $database);
    // Проверяем соединение
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

?>