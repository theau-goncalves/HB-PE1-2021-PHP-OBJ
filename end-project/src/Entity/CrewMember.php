<?php

namespace App\Entity;

class CrewMember
{
    public function __construct(
        private string $id = '',
        private string $name = '',
        private string $image= '',
        private string $wikipedia= '',
        private string $status = '',
        private string $agency= '',
        private array $launches = []
    )
    {
    }

    /**
     * @param array $spaceXArray Tableau envoyé par l'API SpaceX sans modification
     * @return CrewMember
     */
    public function hydrate(array $spaceXArray): CrewMember
    {
        foreach ($spaceXArray as $key => $value) {
            $method = 'set' . ucfirst($key);

            if(method_exists($this, $method)) {
                $this->$method($value);
            }
        }

        return $this;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
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
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    /**
     * @return string
     */
    public function getWikipedia(): string
    {
        return $this->wikipedia;
    }

    /**
     * @param string $wikipedia
     */
    public function setWikipedia(string $wikipedia): void
    {
        $this->wikipedia = $wikipedia;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getAgency(): string
    {
        return $this->agency;
    }

    /**
     * @param string $agency
     */
    public function setAgency(string $agency): void
    {
        $this->agency = $agency;
    }

    /**
     * @return array
     */
    public function getLaunches(): array
    {
        return $this->launches;
    }

    /**
     * @param array $launches
     */
    public function setLaunches(array $launches): void
    {
        $this->launches = $launches;
    }


}