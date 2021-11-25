<?php

namespace App\Item;

class Equipment extends Item
{
    private int $atkBonus = 0;
    private int $magicAtkBonus = 0;
    private int $armorBonus = 0;
    private int $magicArmorBonus = 0;

    /**
     * @param string $name
     * @param array $stats Array with attribute name as key (without $) and int bonus as value. Ex : ['armorBonus' => 3, 'magicArmorBonus' => 2]
     * @param float $weight
     */
    public function __construct(string $name, array $stats, float $weight = 1)
    {
        parent::__construct($name, $weight);

        if (!empty($stats)) {
            foreach ($stats as $attributeName => $value) {
                $this->$attributeName = $value;
            }
        }
    }


}