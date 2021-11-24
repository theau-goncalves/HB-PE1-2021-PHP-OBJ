<?php
class Message
{

    // Methode de tirage au sort (on lui passe une constante et elle retourne une phrase)
    // Afficher un message de mort aléatoire
    const START_GAME = "Le jeu commence";
    const DEAD_HERO = [
        "Le joueur %hero_name% est décédé de mort",
        "%hero_name% est ne respire plus",
    ];

    public static function startGame()
    {
        echo self::START_GAME;
    }

    public static function deadHero(Hero $hero)
    {

        echo str_replace('%hero_name%', $hero->getName(), self::DEAD_HERO);

    }
}

