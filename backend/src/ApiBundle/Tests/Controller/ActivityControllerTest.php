<?php

namespace ApiBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ActivityControllerTest extends WebTestCase
{
    public function testGetactivity()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/getActivity');
    }

}
