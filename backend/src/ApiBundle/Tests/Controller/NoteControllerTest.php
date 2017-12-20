<?php

namespace ApiBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class NoteControllerTest extends WebTestCase
{
    public function testNote()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/note');
    }

}
