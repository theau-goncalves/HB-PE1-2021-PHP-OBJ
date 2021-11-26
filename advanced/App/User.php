<?php

namespace App;

use Cocur\Slugify\Slugify;

class User implements SlugInterface
{
    private string $firstName;
    private string $lastName;

    /**
     * @param string $firstName
     * @param string $lastName
     */
    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }


    public function getSlug(): string
    {
        $s = new Slugify();
        return $s->slugify($this->__toString());
    }

    public function __toString()
    {
        return $this->getFirstName() . ' ' . $this->getLastName();
    }
}