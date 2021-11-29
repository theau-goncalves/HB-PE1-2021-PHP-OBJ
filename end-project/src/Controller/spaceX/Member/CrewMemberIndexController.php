<?php

namespace App\Controller\spaceX\Member;

use App\Controller\AbstractController;
use App\Service\spaceX\SpaceXApiService;

class CrewMemberIndexController extends AbstractController
{
    private SpaceXApiService $spaceApi;

    public function __construct()
    {
        parent::__construct();
        $this->spaceApi = new SpaceXApiService();
    }

    public function __invoke()
    {
        dump($this->spaceApi->getCrewMembers());
        $this->display('spaceX/member/index.html.twig');
    }
}