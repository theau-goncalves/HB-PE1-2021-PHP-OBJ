<?php

use Symfony\Component\HttpClient\HttpClient;
require 'vendor/autoload.php';

$client = HttpClient::create();


function inverse($x) {
    if (!$x) {
        throw new Exception('Division par zéro.');
    }
    return 1/$x;
}

try {
    $response = $client->request('GET', 'https://ai.spacexdata.com/v4/crew');
    echo $response->getStatusCode();
} catch (Exception $e) {
    echo 'Exception reçue : ',  $e->getMessage(), "\n";
}

