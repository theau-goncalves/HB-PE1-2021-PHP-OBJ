<?php

namespace App\Controller\spaceX\Landpad;

use App\Controller\AbstractController;
use App\Service\spaceX\SpaceXApiService;

class LandpadShowController extends AbstractController
{
    private SpaceXApiService $spaceApi;
    private string $landpadId;

    public function __construct(string $landpadId)
    {
        parent::__construct();
        $this->spaceApi = new SpaceXApiService();
        $this->landpadId = $landpadId;
    }

    public function __invoke()
    {
        $this->display('spaceX/landpad/show.html.twig', [
            'landpad' => $this->spaceApi->getLandpad($this->landpadId),
        ]);
    }
}