<?php

namespace App\Game;

use App\Hero\Hero;

class Message
{

    // Methode de tirage au sort (on lui passe une constante et elle retourne une phrase)
    // Afficher un message de mort aléatoire
    const START_GAME = [
        "Le jeu commence.",
        "Let's go !.",
    ];
    const DEAD_HERO = [
        "Le joueur %hero_name% est décédé de mort.",
        "%hero_name% est ne respire plus.",
        "%hero_name% : Ah je bouge plus, je suis bien, la !"
    ];
    const SPELL_USAGE = [
        '%hero_name% utilise %spell_name%. %effect%',
    ];

    public static function startGame(): void
    {
        self::displayHtml(self::getRandomMessage(self::START_GAME), 'start');
    }

    public static function deadHero(Hero $hero): void
    {
        $message = str_replace('%hero_name%', $hero->getName(), self::getRandomMessage(self::DEAD_HERO));
        self::displayHtml($message, ['dead', 'aie']);
    }

    public static function getRandomMessage(array $messageConst): string
    {
        return $messageConst[array_rand($messageConst)];
    }

    public static function useSpell(Hero $hero, string $spellName, string $effect)
    {
        $message = str_replace(
            [
                '%hero_name%',
                '%spell_name%',
                '%effect%'
            ],
            [
                $hero->getName(),
                $spellName,
                $effect
            ],
            self::getRandomMessage(self::SPELL_USAGE)
        );

        self::displayHtml($message, 'spell');
    }

    public static function displayHtml(string $message, string|array $classes = []): void
    {
        if (empty($classes)) {
            $classes = '';
        } elseif (is_array($classes)) {
            $classes = ' ' . implode(' ', $classes);
        } else {
            $classes = ' ' . $classes;
        }

        echo '<div class="message' . $classes . '">' . $message . '</div>';
    }
}
