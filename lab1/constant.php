<?php
define('site', 'Мой сайт');
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание 10</title>
</head>
<body>
    <?php
        if (defined('site')) {
            echo "Константа site существует. Её значение: " . site . "<br>";
        } else {
            echo "Константа site не существует.<br>";
        }
    ?>
    <p> Версия PHP: <?= . PHP_VERSION ?> </p>
    <p> Директория скрипта: <?= . __DIR__ ?> </p>
</body>
</html>
