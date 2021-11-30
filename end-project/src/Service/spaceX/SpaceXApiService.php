<?php

namespace App\Service\spaceX;

use App\Entity\CrewMember;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\DecodingExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class SpaceXApiService
{
    private HttpClientInterface $client;

    public function __construct()
    {
        $this->client = HttpClient::create();
    }

    public function getCrewMembers(): ?array
    {

        $members = $this->makeRequest('https://api.spacexdata.com/v4/crew');

        if($members === null) {
            return null;
        }
        
        $membersObject = [];

        foreach ($members as $member) {
            $memberObj = new CrewMember();
            $memberObj->hydrate($member);
            $membersObject[] = $memberObj;
        }
        return $membersObject;
    }

    private function makeRequest(string $url, string $method = 'GET'): ?array
    {
        try {
            $response = $this->client->request($method, $url);
        } catch (TransportExceptionInterface $e) {

            //TODO A ajouter au fichier de log
            return null;
        }

        if($response->getStatusCode() !== 200) {
            return null;
            //TODO logo ici
        }

        try {
            return $response->toArray();
        } catch (\Exception $e) {
            return null;
            //TODO logo ici
        }
    }

}