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

    /**
     * @return int
     */
    public function getAtkBonus(): int
    {
        return $this->atkBonus;
    }

    /**
     * @param int $atkBonus
     */
    public function setAtkBonus(int $atkBonus): void
    {
        $this->atkBonus = $atkBonus;
    }

    /**
     * @return int
     */
    public function getMagicAtkBonus(): int
    {
        return $this->magicAtkBonus;
    }

    /**
     * @param int $magicAtkBonus
     */
    public function setMagicAtkBonus(int $magicAtkBonus): void
    {
        $this->magicAtkBonus = $magicAtkBonus;
    }

    /**
     * @return int
     */
    public function getArmorBonus(): int
    {
        return $this->armorBonus;
    }

    /**
     * @param int $armorBonus
     */
    public function setArmorBonus(int $armorBonus): void
    {
        $this->armorBonus = $armorBonus;
    }

    /**
     * @return int
     */
    public function getMagicArmorBonus(): int
    {
        return $this->magicArmorBonus;
    }

    /**
     * @param int $magicArmorBonus
     */
    public function setMagicArmorBonus(int $magicArmorBonus): void
    {
        $this->magicArmorBonus = $magicArmorBonus;
    }




}