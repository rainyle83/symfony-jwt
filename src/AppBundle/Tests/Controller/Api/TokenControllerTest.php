<?php

namespace AppBundle\Tests\Controller\Api;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TokenControllerTest extends WebTestCase
{
    public function testPOSTCreateToken()
    {
        $this->createUser('weaverryan', 'I<3Pizza');
        $response = $this->client->post('/api/tokens', [
            'auth' => ['weaverryan', 'I<3Pizza']
        ]);
        $this->assertEquals(200, $response->getStatusCode());
        $this->asserter()->assertResponsePropertyExists(
            $response,
            'token'
        );
    }

    public function testPOSTTokenInvalidCredentials()
    {
        $this->createUser('weaverryan', 'I<3Pizza');
        $response = $this->client->post('/api/tokens', [
            'auth' => ['weaverryan', 'IH8Pizza']
        ]);
        $this->assertEquals(401, $response->getStatusCode());
    }

}
