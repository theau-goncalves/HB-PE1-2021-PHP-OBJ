<?php

namespace App\Item;

use App\Hero\Hero;
use ArrayAccess;
use Countable;

class Inventory implements ArrayAccess, Countable
{
    private array $slots = [];
    private int $maxWeight = 150;
    private Hero $hero;

    public function __construct(Hero $hero)
    {
        $this->hero = $hero;
    }

    /**
     * @return Item[]
     */
    public function getSlots(): array
    {
        return $this->slots;
    }

    /**
     * @param array $slots
     */
    public function setSlots(array $slots): void
    {
        $this->slots = $slots;
    }

    /**
     * @return int
     */
    public function getMaxWeight(): int
    {
        return $this->maxWeight;
    }

    /**
     * @param int $maxWeight
     */
    public function setMaxWeight(int $maxWeight): void
    {
        $this->maxWeight = $maxWeight;
    }

    public function addItem(Item $item): void
    {
        $slots = $this->getSlots();
        $slots[] = $item;
        $this->setSlots($slots);
    }

    /**
     * Supprime un item de l'inventaire à partir de son nom
     * @param string $itemToRemoveName
     */
    public function removeItem(string $itemToRemoveName)
    {
        foreach ($this->getSlots() as $key => $item) {
            if ($item->getName() === $itemToRemoveName) {
                $slots = $this->getSlots();
                unset($slots[$key]);
                $this->setSlots($slots);
                break;
            }
        }
    }

    public function getTotalWeight(): float
    {
        $total = 0;
        foreach ($this->getSlots() as $item) {
            /** @var Item $item */
            $total += $item->getWeight();
        }

        return $total;
    }

    public function getTotalWeightPercentage(): float
    {
        return round($this->getTotalWeight() * 100 / $this->getMaxWeight(), 2);
    }

    public function getBonus()
    {
        $bonusList = [];

        foreach ((new \ReflectionClass(Equipment::class))->getProperties() as $property) {
            $bonusList[$property->getName()] = 0;
        }

        foreach ($this->getSlots() as $item) {
            if ($item instanceof Equipment) {
                foreach ($bonusList as $bonusName => $value) {
                    $methodName = 'get' . $bonusName;
                    $bonusList[$bonusName] += $item->$methodName();
                }
            }
        }

        return $bonusList;
    }

    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->slots[] = $value;
        } else {
            $this->slots[$offset] = $value;
        }
    }

    public function offsetExists($offset): bool
    {
        return isset($this->slots[$offset]);
    }

    public function offsetUnset($offset): void
    {
        unset($this->slots[$offset]);
    }

    public function offsetGet($offset): mixed
    {
        return $this->slots[$offset] ?? null;
    }

    public function count()
    {
        return count($this->slots);
    }

    /**
     * @return Hero
     */
    public function getHero(): Hero
    {
        return $this->hero;
    }

    /**
     * @param Hero $hero
     */
    public function setHero(Hero $hero): void
    {
        $this->hero = $hero;
    }


}