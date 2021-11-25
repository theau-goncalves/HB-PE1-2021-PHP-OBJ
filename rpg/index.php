<?php

use App\Game\Message;
use App\Hero\Warrior;
use App\Hero\Archer;
use App\Hero\Mage;
use App\Item\Equipment;
use App\Item\Item;

require 'vendor/autoload.php';
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
$max = new Archer('Gentil Lapin', 'Tu risque de te pincer très très fort ...');
$nicolas = new Mage('Nico', 'Juste une pinte');
$doigbynique->roar();
$max->longShot($maeva);
$maeva->attackTarget($doigbynique);
$nicolas->setHp($nicolas->getHp() - 50);

$nicolas->vampire($max);

$potion = new Item('Potion de soins', 0.1);
$nains = new Equipment('Epée des nains', ['atkBonus' => 2], 6);
$elfe = new Equipment('Epée des elfes', ['atkBonus' => 3], 6);
$doig = new Equipment('Epée de Doig', ['atkBonus' => 400], 9);


$nicolas->getInventory()->addItem($potion);
$nicolas->getInventory()->addItem($nains);
$nicolas->getInventory()->addItem($elfe);
$nicolas->getInventory()->addItem($doig);

dump($nicolas->getAtk());

//dump((new \ReflectionClass(Equipment::class))->getMethods());

?>
</body>
</html>
