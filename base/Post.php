<?php

class Post
{
    private string $title;
    private string $content;
    private DateTime $createAt;
    private string $author;

    /**
     * @param string $title
     * @param string $content
     * @param DateTime $createAt
     * @param string $author
     */
    public function __construct(string $title, string $content, DateTime $createAt, string $author)
    {
        $this->title = $title;
        $this->content = $content;
        $this->createAt = $createAt;
        $this->author = $author;
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
    public function getCreateAt(): DateTime
    {
        return $this->createAt;
    }

    /**
     * @param string $format French format by default
     * @return string
     */
    public function getReadableCreateAt(string $format = 'd/m/Y'): string
    {
        return $this->getCreateAt()->format($format);
    }

    /**
     * @param DateTime $createAt
     */
    public function setCreateAt(DateTime $createAt): void
    {
        $this->createAt = $createAt;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @param string $author
     */
    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }

    public function __toString(): string
    {
        return $this->title;
    }


}