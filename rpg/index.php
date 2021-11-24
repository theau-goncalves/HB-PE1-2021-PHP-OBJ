<?php
include '../functions.php';
include 'App/Hero/Hero.php';
include 'App/Hero/Warrior.php';
include 'App/Game/Message.php';
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RPG game</title>
    <link rel="stylesheet" href="/assets/style.css">
</head>
<body>


<?php

Message::startGame();


$doigbynique = new Warrior('Doigbynique', 'Tu es capable');
$maeva = new Warrior('Maeva', 'Avec vos jeux de cons la ...');

dump($doigbynique);
$doigbynique->roar();

dump($doigbynique);

$maeva->attackTarget($doigbynique);


?>
</body>
</html>
