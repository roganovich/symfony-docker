<?php

declare(strict_types=1);

namespace App\Tests\Resource\Fixture\Users;

use App\Tests\Tools\FakerTools;
use App\Skills\Domain\Factory\SkillFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class SkillFixture extends Fixture
{
    use FakerTools;

    public const REFERENCE = 'skill';

    public function __construct(private readonly SkillFactory $skillFactory)
    {
    }

    public function load(ObjectManager $manager): void
    {
        $name = $this->getFaker()->company();

        $skill = $this->skillFactory->create($name);

        $manager->persist($skill);
        $manager->flush();

        $this->addReference(self::REFERENCE, $skill);
    }
}
