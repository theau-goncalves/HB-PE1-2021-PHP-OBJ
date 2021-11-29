<?php

namespace App\Service\spaceX;

use App\Entity\CrewMember;
use Symfony\Component\HttpClient\HttpClient;
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
        $response = $this->client->request('GET', 'https://api.spacexdata.com/v4/crew');

        $members = $response->toArray();

        $membersObject = [];

        foreach ($members as $member) {
            $memberObj = new CrewMember();
            $memberObj->hydrate($member);
            $membersObject[] = $memberObj;
        }
        return $membersObject;

    }
}