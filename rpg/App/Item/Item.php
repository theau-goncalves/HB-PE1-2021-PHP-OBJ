<?php

namespace App\Item;

class Item
{
    private string $name;
    private float $weight;

    /**
     * @param string $name
     * @param float $weight 1kg by default
     */
    public function __construct(string $name, float $weight = 1)
    {
        $this->name = $name;
        $this->weight = $weight;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return float|int
     */
    public function getWeight(): float|int
    {
        return $this->weight;
    }

    /**
     * @param float|int $weight
     */
    public function setWeight(float|int $weight): void
    {
        $this->weight = $weight;
    }



}