<?php

define('site', 'Мой сайт');


if (defined('site')) {
    echo "Константа site существует. Её значение: " . site . "<br>";
} else {
    echo "Константа site не существует.<br>";
}


echo "Версия PHP: " . PHP_VERSION . "<br>";
echo "Директория скрипта: " . __DIR__ . "<br>";
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание 10</title>
</head>
<body>
    
</body>
</html>
