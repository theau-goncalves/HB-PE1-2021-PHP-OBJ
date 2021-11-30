<?php

namespace App\Controller;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

abstract class AbstractController
{
    private FilesystemLoader $loader;
    private Environment $twig;

    public function __construct()
    {
        $this->loader = new FilesystemLoader('./templates');
        $this->twig = new Environment($this->loader, [
//            'cache' => './var/cache',
        ]);
    }

    /**
     * @return FilesystemLoader
     */
    public function getLoader(): FilesystemLoader
    {
        return $this->loader;
    }

    /**
     * @return Environment
     */
    public function getTwig(): Environment
    {
        return $this->twig;
    }

    public function display(string $templateName, array $params = []): void
    {
        $this->twig->display($templateName, $params);
    }

    public function render(string $templateName, array $params = []): string
    {
        return $this->twig->render($templateName, $params);
    }

}