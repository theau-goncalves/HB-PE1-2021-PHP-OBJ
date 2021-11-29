<?php

namespace App\Controller;

class HomeController extends AbstractController
{
    public function __invoke()
    {
        $this->display('home.html.twig', [
            'lastName' => 'Toto',
        ]);
    }
}