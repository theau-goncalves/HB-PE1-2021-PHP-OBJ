<?php

include '../functions.php';
include 'App/Hero/Hero.php';
include 'App/Hero/Warrior.php';

$doigbynique = new Warrior('Doigbynique', 'Tu es capable');
$maeva = new Warrior('Maeva', 'Avec vos jeux de cons la ...');

dump($doigbynique);
$maeva->attackTarget($doigbynique);
dump($doigbynique);

