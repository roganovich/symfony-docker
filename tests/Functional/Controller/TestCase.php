<?php

declare(strict_types=1);

namespace App\tests\Functional\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Request;

/**
 * Базовый класс для тестирования API запросов, не требующих авторизацию.
 */
class TestCase extends WebTestCase
{
    public function test_default_controller()
    {
        $client = static::createClient();
        $client->request(Request::METHOD_GET, '/test');

        $this->assertResponseIsSuccessful();

        $json_result = json_decode($client->getResponse()->getContent(), true);
        $this->assertEquals($json_result['status'], 'ok');
    }
}
