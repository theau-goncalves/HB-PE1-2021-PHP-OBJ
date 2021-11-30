<?php

namespace App\Controller\spaceX\Landpad;

use App\Controller\AbstractController;
use App\Service\spaceX\SpaceXApiService;

class LandpadIndexController extends AbstractController
{
    private SpaceXApiService $spaceApi;

    public function __construct()
    {
        parent::__construct();
        $this->spaceApi = new SpaceXApiService();
    }

    public function __invoke()
    {

        $this->display('spaceX/landpad/index.html.twig', [
            'landpads' => $this->spaceApi->getLandpads(),
        ]);
    }
}