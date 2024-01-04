<?php

namespace App\Skills\Domain\Entity;

use App\Shared\Domain\Service\UlidService;

class Skill
{
    private string $ulid;
    private string $name;
    private string $parent_id;

    public function __construct(string $name, string $parent_id = '0')
    {
        $this->ulid = UlidService::generate();
        $this->name = $name;
        $this->parent_id = $parent_id;
    }
}