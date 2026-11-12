<?php

$day = date(d);

$message = match (true) {
    $day >= 1 && $day <= 5 => 'Это рабочий день',
    $day === 6 || $day === 7 => 'Это выходной день',
    default => 'Неизвестный день',
};
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание 7.2</title>
</head>
<body>
    <p><?= $message; ?></p>
</body>
</html>
