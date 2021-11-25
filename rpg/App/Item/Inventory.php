<?php

namespace App\Item;

class Inventory
{
    private array $slots = [];
    private int $maxWeight = 100;

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
            if($item->getName() === $itemToRemoveName) {
                $slots = $this->getSlots();
                unset($slots[$key]);
                $this->setSlots($slots);
                break;
            }
        }
    }
}