<?php

namespace App\Skills\Domain\Entity;

use App\Shared\Domain\Service\UlidService;

class SkillUser
{
    private string $ulid;
    private string $user_id;
    private string $skill_id;

    public function __construct(string $user_id, string $skill_id)
    {
        $this->ulid = UlidService::generate();
        $this->user_id = $user_id;
        $this->skill_id = $skill_id;
    }
}