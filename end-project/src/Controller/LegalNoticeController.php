<?php

namespace App\Controller;

class LegalNoticeController extends AbstractController
{
    public function __invoke()
    {
        $this->display('legal_notice.html.twig');
    }
}