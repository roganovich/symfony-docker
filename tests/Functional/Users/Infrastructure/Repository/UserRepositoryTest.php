<?php

namespace App\Tests\Functional\Users\Infrastructure\Repository;

use App\Users\Infrastructure\Repository\UserRepository;
use App\Users\Domain\Factory\UserFactory;
use Faker\Factory;
use Faker\Generator;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserRepositoryTest extends WebTestCase
{
    private UserRepository $repository;
    private Generator $faker;

    public function setUp(): void
    {
        parent::setUp();
        $this->repository = static::getContainer()->get(UserRepository::class);
        $this->faker = Factory::create();
    }

    public function test_add_user_successfully():void
    {
        $email = $this->faker->email();
        $password = $this->faker->password();

        $user = (new UserFactory())->create($email, $password);

        // act
        $this->repository->add($user);

        // assert
        $existingUser = $this->repository->findById($user->getId());
        $this->assertEquals($user->getId(), $existingUser->getId());
    }
}
