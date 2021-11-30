<?php

namespace App\Service\spaceX;

use App\Entity\CrewMember;
use App\Entity\Landpad;
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

        if ($members === null) {
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

    public function getCrewMember(string $id): ?CrewMember
    {
        $member = $this->makeRequest('https://api.spacexdata.com/v4/crew/' . $id);
        if ($member === null) {
            return null;
        }
        return (new CrewMember())->hydrate($member);
    }

    public function getLandpads(): ?array
    {

        $landpads = $this->makeRequest('https://api.spacexdata.com/v4/landpads');

        if ($landpads === null) {
            return null;
        }

        $landpadsObject = [];

        foreach ($landpads as $landpad) {
            $landpadObj = new Landpad();
            $landpadObj->hydrate($landpad);
            $landpadsObject[] = $landpadObj;


        }
        return $landpadsObject;
    }

    public function getLandpad(string $id): ?Landpad
    {
        $landpad = $this->makeRequest('https://api.spacexdata.com/v4/landpads/' . $id);
        if ($landpad === null) {
            return null;
        }
        return (new Landpad())->hydrate($landpad);
    }

    private function makeRequest(string $url, string $method = 'GET'): ?array
    {
        try {
            $response = $this->client->request($method, $url);
            if ($response->getStatusCode() !== 200) {
                return null;
            }

            return $response->toArray();
        } catch (
        TransportExceptionInterface |
        ClientExceptionInterface |
        DecodingExceptionInterface |
        RedirectionExceptionInterface |
        ServerExceptionInterface $e
        ) {
            echo $e->getMessage();
            return null;

        }
    }

}