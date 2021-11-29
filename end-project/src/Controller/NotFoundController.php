<?php

namespace App\Controller;

class NotFoundController extends AbstractController
{
    public function __invoke()
    {
        $this->display('404.html.twig');
    }
}