<?php

$day = 3;


switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        $message = 'Это рабочий день';
        break;
    case 6:
    case 7:
        $message = 'Это выходной день';
        break;
    default:
        $message = 'Неизвестный день';
        break;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Конструкция switch</title>
</head>
<body>
    <h1>Конструкция switch</h1>
    <p><?php echo $message; ?></p>
</body>
</html>
