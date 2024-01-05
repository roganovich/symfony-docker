<?php

namespace App\Users\Infrastructure\Adapter;

use App\Skills\Infrastructure\Adapter\SkillsApiInterface;

final class SkillsAdapter
{
    public function __construct(private SkillsApiInterface $api)
    {
    }

    public function getSkillsForUser(
        string $userId,
    ): array {
        return $this->api->getSkillsForUser($userId);
    }
}
