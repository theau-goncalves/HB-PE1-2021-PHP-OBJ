<?php

namespace App\Hero;

use App\Game\Message;

class Archer extends Hero
{
    public function __construct(string $name, ?string $favoriteQuote = null)
    {
        parent::__construct($name, $favoriteQuote);
        $this->maxHp = 80;
        $this->maxMp = 20;
        $this->atk = 30;
        $this->magicAtk = 10;
        $this->armor = 5;
        $this->magicArmor = 5;
        $this->hp = $this->maxHp;
        $this->mp = $this->maxMp;
    }

    public function longShot(Hero $target)
    {
        $damage = $target->calculateDamage($this->getAtk() * 1.5);
        Message::useSpell($this, 'Long tir', "Il inflige $damage points de dégats.");
        $target->loseHP($damage);

    }
}