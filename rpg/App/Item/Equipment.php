<?php

namespace App\Item;

class Equipment extends Item
{
    private int $atkBonus = 0;
    private int $magicAtkBonus = 0;
    private int $armorBonus = 0;
    private int $magicArmorBonus = 0;

    public function __construct(string $name, array $stats, float $weight = 1 )
    {
        parent::__construct($name, $weight);

        // ['armorBonus' => 3, 'magicArmorBonus' => 2]
        if(!empty($stats)) {
            foreach ($stats as $attributeName => $value)
            {
//                $this->$attributeName = $value;

                if($attributeName === 'armorBonus') {
                    $this->armorBonus = $value;
                }
            }
        }
    }


}