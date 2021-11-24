<?php
use \App\Game\Message;
use \App\Hero\Warrior;
use \App\Hero\Archer;

include '../functions.php';
include 'App/Hero/Hero.php';
include 'App/Hero/Warrior.php';
include 'App/Hero/Archer.php';
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
<h1 style="text-align: center; font-size: 3rem">
    Je suis un
</h1>
<img src="/assets/images/sddefault.jpg" style="width: 450px; margin: 0 auto; display: block">

<?php

Message::startGame();


$doigbynique = new Warrior('Doigbynique', 'Tu es capable');
$maeva = new Warrior('Maeva', 'Avec vos jeux de cons la ...');
$max = new Archer('Gentil Lapin', 'Tu risque de te pincer très très fort ...');
$doigbynique->roar();
$maeva->attackTarget($doigbynique);
$max->longShot($maeva);


?>
</body>
</html>
