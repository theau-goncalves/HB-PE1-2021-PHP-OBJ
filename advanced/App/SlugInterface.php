<?php

namespace App;

interface SlugInterface
{
    /**
     * Prend une chaine de caractères et retourne un slug de cette chaine.
     * Ex: "Comment préparer de jolies carottes" ---> "comment-preparer-de-jolies-carottes"
     * @return string
     */
    public function getSlug(): string;
}