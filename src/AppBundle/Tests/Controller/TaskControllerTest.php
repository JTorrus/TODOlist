<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TaskControllerTest extends WebTestCase
{
    public function testAdd()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Add');
    }

    public function testEdit()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Edit');
    }

    public function testRemove()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Remove');
    }

    public function testList()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/List');
    }

}
