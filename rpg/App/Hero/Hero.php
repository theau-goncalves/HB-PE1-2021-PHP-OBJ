<?php

namespace App\Hero;

use App\Game\Message;

abstract class Hero
{
    const ATK_MODE_PHYSIC = 0;
    const ATK_MODE_MAGIC = 1;

    protected string $name;
    protected ?string $favoriteQuote;
    protected int $maxHp;
    protected int $maxMp;
    protected int $hp;
    protected int $mp;
    protected int $atk;
    protected int $magicAtk;
    protected int $armor;
    protected int $magicArmor;

    public function __construct(string $name, ?string $favoriteQuote = null)
    {
        $this->name = $name;
        $this->favoriteQuote = $favoriteQuote;
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
     * @return string|null
     */
    public function getFavoriteQuote(): ?string
    {
        return $this->favoriteQuote;
    }

    /**
     * @param string|null $favoriteQuote
     */
    public function setFavoriteQuote(?string $favoriteQuote): void
    {
        $this->favoriteQuote = $favoriteQuote;
    }

    /**
     * @return int
     */
    public function getMaxHp(): int
    {
        return $this->maxHp;
    }

    /**
     * @param int $maxHp
     */
    public function setMaxHp(int $maxHp): void
    {
        $this->maxHp = $maxHp;
    }

    /**
     * @return int
     */
    public function getMaxMp(): int
    {
        return $this->maxMp;
    }

    /**
     * @param int $maxMp
     */
    public function setMaxMp(int $maxMp): void
    {
        $this->maxMp = $maxMp;
    }

    /**
     * @return int
     */
    public function getHp(): int
    {
        return $this->hp;
    }

    /**
     * @param int $hp
     */
    public function setHp(int $hp): void
    {
        $this->hp = $hp;
    }

    /**
     * @return int
     */
    public function getMp(): int
    {
        return $this->mp;
    }

    /**
     * @param int $mp
     */
    public function setMp(int $mp): void
    {
        $this->mp = $mp;
    }

    /**
     * @return int
     */
    public function getAtk(): int
    {
        return $this->atk;
    }

    /**
     * @param int $atk
     */
    public function setAtk(int $atk): void
    {
        $this->atk = $atk;
    }

    /**
     * @return int
     */
    public function getMagicAtk(): int
    {
        return $this->magicAtk;
    }

    /**
     * @param int $magicAtk
     */
    public function setMagicAtk(int $magicAtk): void
    {
        $this->magicAtk = $magicAtk;
    }

    /**
     * @return int
     */
    public function getArmor(): int
    {
        return $this->armor;
    }

    /**
     * @param int $armor
     */
    public function setArmor(int $armor): void
    {
        $this->armor = $armor;
    }

    /**
     * @return int
     */
    public function getMagicArmor(): int
    {
        return $this->magicArmor;
    }

    /**
     * @param int $magicArmor
     */
    public function setMagicArmor(int $magicArmor): void
    {
        $this->magicArmor = $magicArmor;
    }

    public function attackTarget(Hero $target): void
    {
        $target->loseHP($target->calculateDamage($this->getAtk()));
    }

    /**
     * Permet à un joueur de perdre des points de vie sans passer en négatif
     * @param int $damage
     */
    protected function loseHP(int $damage): void
    {
        $remainingHp = $this->getHp() - $damage;

        if($remainingHp > 0) {
            $this->setHp($remainingHp);
        } else {
            $this->setHp(0);
            Message::deadHero($this);
        }
    }

    /**
     * Permet de connaitre les dégats à subir en fonction du montant de l'attaque ennemi
     * @param int $atkValue
     * @return int
     */
    protected function calculateDamage(int $atkValue, int $mode = self::ATK_MODE_PHYSIC): int
    {
        if($mode === self::ATK_MODE_PHYSIC) {
            $damage = $atkValue - $this->getArmor();
        } elseif ($mode === self::ATK_MODE_MAGIC) {
            $damage = $atkValue - $this->getMagicArmor();
        }

        if($damage < 0 ) {
            return 0;
        }

        return $damage;
    }

    protected function gainHp(int $healValue)
    {

        if($this->getHp() < $this->getMaxHp()) {
            $this->setHp($this->getHp() + $healValue);

            if($this->getHp() > $this->getMaxHp()) {
                $this->setHp($this->getMaxHp());
            }

            Message::heal($this, $healValue);
        }
    }
}

