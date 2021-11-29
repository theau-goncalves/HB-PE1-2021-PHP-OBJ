<?php

use Symfony\Component\HttpClient\HttpClient;
require 'vendor/autoload.php';

$client = HttpClient::create();

$response = $client->request('GET', 'https://api.spacexdata.com/v4/crew');

if($response->getStatusCode() === 200) {
    dump($response->toArray());
}
