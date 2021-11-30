<?php

namespace App\Controller\spaceX\Member;
use App\Controller\AbstractController;
use App\Service\spaceX\SpaceXApiService;

class CrewMemberShowController extends AbstractController
{
    private SpaceXApiService $spaceApi;
    private string $crewMemberId;

    public function __construct(string $id)
    {
        parent::__construct();
        $this->spaceApi = new SpaceXApiService();
        $this->crewMemberId = $id;
    }

    public function __invoke()
    {
        $this->display('spaceX/member/show.html.twig', [

        ]);
    }
}