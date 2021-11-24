<?php

class Warrior extends Hero
{
    private int $armorBuffValue = 5;

    public function __construct(string $name, ?string $favoriteQuote = null)
    {
        parent::__construct($name, $favoriteQuote);
        $this->maxHp = 120;
        $this->maxMp = 20;
        $this->atk = 1000;
        $this->magicAtk = 0;
        $this->armor = 15;
        $this->magicArmor = 10;
        $this->hp = $this->maxHp;
        $this->mp = $this->maxMp;
    }

    public function roar()
    {
        $this->setArmor($this->getArmor() + $this->armorBuffValue);
        $this->setMagicArmor($this->getMagicArmor() + $this->armorBuffValue);
        Message::useSpell(
            $this,
            'Cri du guerrier',
            "Augmente l'armure physique et magique de " . $this->armorBuffValue . ' points'
        );
    }

}