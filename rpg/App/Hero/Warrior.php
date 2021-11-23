<?php

class Warrior extends Hero
{

    public function __construct(string $name, ?string $favoriteQuote = null)
    {
        parent::__construct($name, $favoriteQuote);
        $this->maxHp = 120;
        $this->maxMp = 20;
        $this->atk = 50;
        $this->magicAtk = 0;
        $this->armor = 15;
        $this->magicArmor = 10;
        $this->hp = $this->maxHp;
        $this->mp = $this->maxMp;
    }


}