<?php

$name = 'Никита';
$age = 22;

echo "Меня зовут: $name<br>";
echo "Мне $age лет<br>";

echo "Тип переменной \$name: " . gettype($name) . "<br>";
echo "Тип переменной \$age: " . gettype($age) . "<br>";

unset($name);
unset($age);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание 5</title>
</head>
<body>
    <p> Меня зовут: <?=$name?> </p> <br>
    <p> Мне <?=$age?> лет </p> <br>
</body>
</html>
