<?php
include '../functions.php';
date_default_timezone_set('Europe/Paris');
setlocale(LC_TIME, 'fr_FR');

$today = new DateTime();

$birthDay = new DateTime('1996-08-26 8:00');

$anniversaire = DateTime::createFromFormat('d/m/Y', '26/08/1996');
dump($birthDay);
dump($anniversaire);




echo "Je suis né le " . $birthDay->format('d/m/Y') . ' à ' . $birthDay->format('H\hi') . '<br>';
echo "Je suis né le " . $birthDay->format('l d F Y') . ' à ' . $birthDay->format('H\hi');