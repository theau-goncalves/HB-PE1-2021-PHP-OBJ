<?php

namespace App;

use DateTime;

class Portfolio implements SeoInterface
{
    use SeoTrait;

    private string $projectName;
    private string $description;
    private string $mainImageUrl;
    private DateTime $createdAt;

    public function __construct()
    {
        $this->projectName = "Former les PE1 HB";
        $this->description = "Cours de PHP OBJECT + Composer";
        $this->mainImageUrl = "https://static.fnac-static.com/multimedia/Images/FD/Comete/145614/CCP_IMG_ORIGINAL/1918415.jpg";
        $this->createdAt = new DateTime();

    }

    /**
     * @return string
     */
    public function getProjectName(): string
    {
        return $this->projectName;
    }

    /**
     * @param string $projectName
     */
    public function setProjectName(string $projectName): void
    {
        $this->projectName = $projectName;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getMainImageUrl(): string
    {
        return $this->mainImageUrl;
    }

    /**
     * @param string $mainImageUrl
     */
    public function setMainImageUrl(string $mainImageUrl): void
    {
        $this->mainImageUrl = $mainImageUrl;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param DateTime $createdAt
     */
    public function setCreatedAt(DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    


}