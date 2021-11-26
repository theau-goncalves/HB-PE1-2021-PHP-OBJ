<?php

namespace App;

use DateTime;

class Post implements SeoInterface, TimestampInterface
{
    use TimestampTrait;

    private string $title;
    private ?string $content;

    /**
     * @param string $title
     */
    public function __construct(string $title)
    {
        $this->title = $title;

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
     * @return string|null
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * @param string|null $content
     */
    public function setContent(?string $content): void
    {
        $this->content = $content;
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