<?php

$bmw = [
    'model'      => 'X5',
    'speed, km/h' => 120,
    'doors'      => 5,
    'year'       => '2006',
];

$toyota = [
    'model'      => 'Carina',
    'speed, km/h' => 130,
    'doors'      => 4,
    'year'       => '2007',
];

$opel = [
    'model'      => 'Corsa',
    'speed, km/h' => 140,
    'doors'      => 5,
    'year'       => '2007',
];

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание 9</title>
</head>
<body>
    <h1>Массивы</h1>
    <p> bmw - <?= $bmw['model'] ?> - <?= $bmw['speed, km/h'] ?> - <?= $bmw['doors'] ?> - <?= $bmw['year'] ?> </p> 
    <p> toyota - <?= $toyota['model'] ?> - <?= $toyota['speed, km/h'] ?> - <?= $toyota['doors'] ?> - <?= $toyota['year'] ?> </p> 
    <p> opel - <?= $opel['model'] ?> - <?= $opel['speed, km/h'] ?> - <?= $opel['doors'] ?> - <?= $opel['year'] ?> </p> 
</body>
</html>
