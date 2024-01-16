<?php

namespace App\Skills\Domain\Entity;

use App\Shared\Domain\Service\UlidService;

class Skill
{
    private string $ulid;
    private string $name;

    public function __construct(string $name)
    {
        $this->ulid = UlidService::generate();
        $this->name = $name;
    }
}