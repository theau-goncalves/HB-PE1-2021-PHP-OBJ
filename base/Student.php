<?php

class Student extends User
{
    protected ?string $funder;
    protected string $nationalStudentId;
    protected array $degrees;

    public function __construct(
        string  $firstName,
        string  $lastName,
        int     $age,
        string  $email,
        ?string $gender = null,
        ?string $funder = null,
        array $degrees = []
    )
    {
        parent::__construct($firstName, $lastName, $age, $email, $gender);
        $this->funder = $funder;
        $this->nationalStudentId = uniqid();
        $this->degrees = $degrees;


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

    /**
     * @return string
     */
    public function getNationalStudentId(): string
    {
        return $this->nationalStudentId;
    }

    /**
     * @param string $nationalStudentId
     */
    public function setNationalStudentId(string $nationalStudentId): void
    {
        $this->nationalStudentId = $nationalStudentId;
    }

    /**
     * @return array
     */
    public function getDegrees(): array
    {
        return $this->degrees;
    }

    /**
     * @param array $degrees
     */
    public function setDegrees(array $degrees): void
    {
        $this->degrees = $degrees;
    }

    public function addDegree(string $degreeName): void
    {
        $this->degrees[] = $degreeName;
    }

    public function removeDegree(string $degreeName): void
    {
        $key = array_search($degreeName, $this->degrees);
        unset($this->degrees[$key]);

    }


    


}

