<?php
declare(strict_types=1);

namespace App\Skills\Domain\Factory;

use App\Skills\Domain\Entity\Skill;

class SkillFactory
{
    public function create($name): Skill
    {
        return new Skill($name);
    }
}