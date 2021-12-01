<?php
require 'vendor/autoload.php';

$price = null;

if($_GET && !empty($_GET)) {

    $startAt = new DateTime($_GET['start_at']);
    $endAt = new DateTime($_GET['end_at']);
    $interval = $startAt->diff($endAt);

    $hours = $interval->days * 24 + $interval->h;

    $waterLostLiter = $hours * $_GET['volume'];

    $waterLostMeter = $waterLostLiter / 1000;

    $price = round($waterLostMeter * $_GET['water_price'],2);
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


</head>
<body>
    <?php if($price === null): ?>
    <form method="get">
        <input required type="number" step="0.1" min="0" name="volume" placeholder="Volume par heure en litre">
        <input required type="number" step="0.01" min="0" name="water_price" placeholder="Prix de l'eau au mètre cube">
        <input required type="datetime-local" name="start_at" placeholder="Date de début">
        <input required type="datetime-local" name="end_at" placeholder="Date de fin">
        <button type="submit">
            Calculer
        </button>
    </form>
    <?php endif;?>


    <?php if($price !== null): ?>
    <div>
        Résultat : <?php echo $price; ?> €
    </div>
    <?php endif;?>
</body>
</html>