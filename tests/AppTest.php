<?php
namespace App\tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class AppTest extends WebTestCase {

    public function testAdminPage() {
        $client = static::createClient();
        $client->request('GET', '/superadmin');
        $this->assertResponseStatusCodeSame(Response::HTTP_UNAUTHORIZED);
    }
}