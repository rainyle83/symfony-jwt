<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LoginControllerTest extends WebTestCase
{
    public function testPOSTLoginUser()
    {
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
        $responseArr = json_decode($this->client->getResponse()->getContent(), true);
        $this->assertArrayHasKey('token', $responseArr);
    }
}
