<?php
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

    public static function startGame(): void
    {
       self::displayHtml(self::getRandomMessage(self::START_GAME));
    }

    public static function deadHero(Hero $hero): void
    {
        $message =  str_replace('%hero_name%', $hero->getName(), self::getRandomMessage(self::DEAD_HERO));
        self::displayHtml($message);
    }

    public static function getRandomMessage(array $messageConst): string
    {
        return $messageConst[array_rand($messageConst)];
    }

    public static function displayHtml(string $message): void
    {
        //Ajout param optionnel de type array
        // Faire génération de la liste des classes

        // Ex: ['danger', 'toto']
        //<div class="message danger toto"> Message </div>

        echo '<div class="message">' . $message . '</div>';
    }
}

