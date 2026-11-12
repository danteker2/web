<?php

$age = 22;

if ($age >= 18 && $age <= 59) {
    $message = 'Вам ещё работать и работать';
} elseif ($age > 59) {
    $message = 'Вам пора на пенсию';
} elseif ($age >= 1 && $age <= 17) {
    $message = 'Вам ещё рано работать';
} else {
    $message = 'Неизвестный возраст';
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание 6</title>
</head>
<body>
    <p><?php echo $message; ?></p>
</body>
</html>
