<?php

namespace App\Controller;

class CrewMemberIndexController extends AbstractController
{
    public function __invoke()
    {
        $this->display('spaceX/member/index.html.twig');
    }
}