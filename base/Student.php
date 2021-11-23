<?php

class Student extends User
{
    protected ?string $funder;

    public function __construct(
        string  $firstName,
        string  $lastName,
        int     $age,
        string  $email,
        ?string $gender = null,
        ?string $funder = null

    )
    {
        parent::__construct($firstName, $lastName, $age, $email, $gender);
        $this->funder = $funder;
    }

    /**
     * @return string|null
     */
    public function getFunder(): ?string
    {
        return $this->funder;
    }

    /**
     * @param string|null $funder
     */
    public function setFunder(?string $funder): void
    {
        $this->funder = $funder;
    }

    


}

