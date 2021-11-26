<?php

namespace App;

use DateTime;

class Post implements SeoInterface
{
    private string $title;
    private string $content;
    private DateTime $createdAt;

    /**
     * @param string $title
     */
    public function __construct(string $title)
    {
        $this->title = $title;
        $this->createdAt = new DateTime();
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
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

    /**
     * For <title> html element
     * @return string
     */
    public function getMetaTitle(): string
    {
        return $this->getTitle();
    }

    /**
     * For <meta name="description">
     * @return string
     */
    public function getMetaDescription(): string
    {
        return substr($this->getContent(), 0, 160);
    }
}