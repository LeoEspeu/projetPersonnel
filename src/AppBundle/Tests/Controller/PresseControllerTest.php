<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PresseControllerTest extends WebTestCase
{
    public function testPresse()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');
    }

}
