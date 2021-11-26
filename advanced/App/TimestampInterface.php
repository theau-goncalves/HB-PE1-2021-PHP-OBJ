<?php

namespace App;

use DateTime;

interface TimestampInterface
{
    public function getCreatedAt(): ?DateTime;
    public function setCreatedAt(?DateTime $createdAt): void;
    public function getUpdatedAt(): ?DateTime;
    public function setUpdatedAt(?DateTime $updatedAt): void;

}