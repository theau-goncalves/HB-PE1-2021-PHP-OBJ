<?php

namespace App\Entity;

class Landpad
{
    private ?string $id = '';
    private ?string $fullName = '';
    private ?string $locality = '';
    private ?string $region = '';
    private int $landingAttempts = 0;
    private int $landingSuccesses = 0;
    private array $launches = [];

    public function hydrate(array $spaceXArray): Landpad
    {
        foreach ($spaceXArray as $key => $value) {
            $keyExplodedUppercase = [];
            //Faire un tableau avec un mot a chaque _
            $keyExploded = explode('_', $key);

            //Première lettre de chaque mot en majuscule
            foreach ($keyExploded as $index => $attributeNamePart) {
                $keyExplodedUppercase[$index] = ucfirst($attributeNamePart);
            }

            //On reconstruit le nom de l'attribut
            $keyImploded = implode('', $keyExplodedUppercase);

            $method = 'set' . ucfirst($keyImploded);

            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }

        return $this;
    }

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string|null $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getFullName(): ?string
    {
        return $this->fullName;
    }

    /**
     * @param string|null $fullName
     */
    public function setFullName(?string $fullName): void
    {
        $this->fullName = $fullName;
    }

    /**
     * @return string|null
     */
    public function getLocality(): ?string
    {
        return $this->locality;
    }

    /**
     * @param string|null $locality
     */
    public function setLocality(?string $locality): void
    {
        $this->locality = $locality;
    }

    /**
     * @return string|null
     */
    public function getRegion(): ?string
    {
        return $this->region;
    }

    /**
     * @param string|null $region
     */
    public function setRegion(?string $region): void
    {
        $this->region = $region;
    }

    /**
     * @return int
     */
    public function getLandingAttempts(): int
    {
        return $this->landingAttempts;
    }

    /**
     * @param int $landingAttempts
     */
    public function setLandingAttempts(int $landingAttempts): void
    {
        $this->landingAttempts = $landingAttempts;
    }

    /**
     * @return int
     */
    public function getLandingSuccesses(): int
    {
        return $this->landingSuccesses;
    }

    /**
     * @param int $landingSuccesses
     */
    public function setLandingSuccesses(int $landingSuccesses): void
    {
        $this->landingSuccesses = $landingSuccesses;
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