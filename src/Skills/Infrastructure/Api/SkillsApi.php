<?php

declare(strict_types=1);

namespace App\Skills\Infrastructure\Api;

use App\Skills\Infrastructure\Adapter\SkillsApiInterface;

final readonly class SkillsApi implements SkillsApiInterface
{

    public function getSkillsForUser(
        string $userId,
    ): array
    {
        return [1 => '', 2 => ''];
    }
}
