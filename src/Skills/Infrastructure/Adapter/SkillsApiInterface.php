<?php

declare(strict_types=1);

namespace App\Skills\Infrastructure\Adapter;

interface SkillsApiInterface
{
    public function getSkillsForUser(
        string $userId
    ): array;
}
