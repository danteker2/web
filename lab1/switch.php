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
    <title>Задание 7</title>
</head>
<body>
    <p><?php echo $message; ?></p>
</body>
</html>
