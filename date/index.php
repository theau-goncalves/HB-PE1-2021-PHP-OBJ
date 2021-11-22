<?php
include '../functions.php';
date_default_timezone_set('Europe/Paris');
setlocale(LC_TIME, 'fr_FR');

$today = new DateTime();

$birthDay = new DateTime('1996-08-26 8:00');

$anniversaire = DateTime::createFromFormat('d/m/Y', '26/08/1996');

// echo "Je suis né le " . $birthDay->format('d/m/Y') . ' à ' . $birthDay->format('H\hi') . '<br>';
// echo "Je suis né le " . $birthDay->format('l d F Y') . ' à ' . $birthDay->format('H\hi');

//Ecriture short
$dateFromTimestamp = (new DateTime())->setTimestamp(time());

$ageDetails = $birthDay->diff($today);
/** @var DateInterval $ageDetails */

// echo $ageDetails->format('Je suis né depuis %y ans %m mois et %d jours');

//Licence 30 days


$licenceSubscriptionDate = new DateTime('2021-11-01'); //Date de la licence
$licenceDuration = new DateInterval('P1M'); //Validité max de la licence (1 mois)
$endOfValidity = clone $licenceSubscriptionDate; //On clone l'object pour ne pas modifier la date initiale
$endOfValidity->add($licenceDuration); // Ajout d'un mois sur la date de la licence


function isLicenceValid(Datetime $licenceSubscriptionDate): bool
{
    // On ajoute 1 mois pour comparer
    $endOfValidity = (clone $licenceSubscriptionDate)->add(new DateInterval('P1M'));

    // Si $endOfValidity est plus grand que la date d'aujourd'hui, la licence est valide
    if($endOfValidity > new DateTime()) {
        return true;
    }

    return false;
}

//dump(isLicenceValid($licenceSubscriptionDate));

$start = new DateTime('2021-01-01');

for ($i = 1; $i <=12; $i++) {
    echo $start->format('t/m/Y') . '<br>';
    $start->add(new DateInterval('P1M'));
}

echo $today->modify('next Monday')->format('d/m/Y');

