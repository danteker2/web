<?php

define('SITE_NAME', 'Мой сайт');


if (defined('SITE_NAME')) {
    echo "Константа SITE_NAME существует. Её значение: " . SITE_NAME . "<br>";
} else {
    echo "Константа SITE_NAME не существует.<br>";
}


echo "Версия PHP: " . PHP_VERSION . "<br>";
echo "Директория скрипта: " . __DIR__ . "<br>";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Константы</title>
</head>
<body>
    <h1>Константы</h1>
</body>
</html>