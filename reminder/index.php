<?php

require 'vendor/autoload.php';

use App\NegativeHeightException;

/**
 * @param int $height
 * @param int $weight
 * @return float
 * @throws Exception
 */
function getImc(int $height, int $weight): float
{
    if($height < 0) {
        throw new NegativeHeightException();
    }

    if($weight < 0) {
        throw new Exception('Tu ne peux pas avoir un poids ou une taille negatif');
    }

    $height = $height/100;

    return round($weight / ($height * $height), 2);
}


//try {
//    echo getImc(-100, 100);
//} catch (NegativeHeightException $exception) {
//    die('negatif');
//} catch (Exception $e) {
//    die($e->getMessage() . $e->getFile() . $e->getLine());
//}


echo getImc(-100, 100);