<?php

class User
{
    public string $firstName;
    private string $lastName;
    private int $age = 25;
    private ?string $gender;

    /**
     * @param string $firstName
     * @param string $lastName
     * @param int $age
     * @param string|null $gender male | female | other
     */
    public function __construct(
        string $firstName,
        string $lastName,
        int $age,
        ?string $gender = null
    )
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->gender = $gender;
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

    /**
     *
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * Permet de changer l'age
     * @param int $age Pas en age de chien
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    /**
     * @return string|null
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * @param string|null $gender
     */
    public function setGender(?string $gender): void
    {
        $this->gender = $gender;
    }

    public function __toString(): string
    {
        return $this->firstName . ' ' . $this->lastName;
    }


}