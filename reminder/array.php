<?php
require 'vendor/autoload.php';

$notes = [18, 3, 15, 12, 11];

array_push($notes, 10);
$notes[] = 19;

if (in_array(15, $notes)) {
    echo "J'ai trouvé 15 !";
}

$names = [
    'Renaud',
    'Lydie',
    'Nicolas',
    'Max',
    'Léo',
//    'Safia',
    'Maeva',
    'Mouzda',
    'Annisa',
    'Guillaume',
    'Jérémy',
    'Dominique'
];

//$names = array_diff($names, ['Jérémy']);
//unset($names[array_search('Dominique', $names)]);

dump($names);

//while (count($names) > 3) {
//    unset($names[array_rand($names)]);
//}


function makeGroups(array $tab, int $groupLength): array
{
    shuffle($tab);
    return array_chunk($tab, $groupLength);
}


$birthDay = new DateTime('1996-08-26');
$conception = clone $birthDay;

$conception->sub(new DateInterval('P8M28D'));

//echo "J'ai été conçu le " . $conception->format('d/m/Y') .'<br>';


$motherBirthDay = new DateTime('1971-03-07');
$fatherBirthDay = new DateTime('1966-03-04');

$motherConceptionDay = $motherBirthDay->diff($conception);
$fatherConceptionDay = $fatherBirthDay->diff($conception);

//echo "Ma mère avait " . $motherConceptionDay->format('%y ans %m mois et %d jours') . " lors de ma conception <br>";
//echo "Mon père avait " . $fatherConceptionDay->format('%y ans %m mois et %d jours') . " lors de ma conception <br>";


echo '<h1 style="font-size: 8rem; text-align: center">' . $names[array_rand($names)]. '</h1>'
?>