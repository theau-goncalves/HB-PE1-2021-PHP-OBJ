<?php

namespace App\Hero;

use App\Game\Message;

class Mage extends Hero
{
    public function __construct(string $name, ?string $favoriteQuote = null)
    {
        parent::__construct($name, $favoriteQuote);
        $this->maxHp = 80;
        $this->maxMp = 100;
        $this->atk = 5;
        $this->magicAtk = 25;
        $this->armor = 5;
        $this->magicArmor = 2;
        $this->hp = $this->maxHp;
        $this->mp = $this->maxMp;
    }

    public function vampire(Hero $target)
    {
        $damage = $target->calculateDamage($this->getMagicAtk(), self::ATK_MODE_MAGIC);
        $effect = "Il inflige $damage points de dégat et se soigne le lanceur de " . $damage/2;
        Message::useSpell($this, 'Vampirisme', $effect);
        $target->loseHP($damage);


    }
}