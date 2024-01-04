<?php

declare(strict_types=1);

namespace App\Users\Infrastructure\Controller;

use App\Skills\Infrastructure\Api\SkillsApi;
use App\Users\Infrastructure\Adapter\SkillsAdapter;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\Routing\Annotation\Route;

#[AsController]
#[Route('/api/users/profile', methods: ['GET'])]
class ProfileAction
{
    public function __invoke(): JsonResponse
    {
        $adapter = new SkillsAdapter(new SkillsApi());

        return new JsonResponse([
            'ulid' => '',
            'email' => '',
            'skills' => $adapter->getSkillsForUser('1')
        ]);
    }
}
