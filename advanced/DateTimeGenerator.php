<?php

class DateTimeGenerator
{
    public function __invoke(): DateTime
    {
        return new DateTime();
    }
}