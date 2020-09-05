<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ChevalControllerTest extends WebTestCase
{
    public function testCheval()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/{cheval}');
    }

}
