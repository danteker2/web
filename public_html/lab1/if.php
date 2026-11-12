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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Конструкции if-elseif-else</title>
</head>
<body>
    <h1>Конструкции if-elseif-else</h1>
    <p><?php echo $message; ?></p>
</body>
</html>