<?php

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
        $hp = $target->getHp();

        $target->loseHP($target->calculateDamage($this->getAtk() * 1.5));

        $hp = $hp - $target->getHp();

        Message::useSpell($this, 'Long tir', "Il inflige $hp points de dégats.");
    }
}