<?php
$name = 'Никита';
$age = 22;
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание 5</title>
</head>
<body>
    <p> Меня зовут: <?= "$name" ?> </p>
    <p> Мне <?= "$age" ?> лет </p>
    <p> Тип переменной <?php "\$name" . gettype($name) . ?> лет </p>
    <p> Тип переменной <?php "\$age" . gettype($age) . ?> лет </p>
</body>
</html>

<?php   
    unset($name);
    unset($age);
?>
