<?php

interface SeoInterface
{
    /**
     * For <title> html element
     * @return string
     */
    public function getMetaTitle(): string;

    /**
     * For <meta name="description">
     * @return string
     */
    public function getMetaDescription(): string;
}