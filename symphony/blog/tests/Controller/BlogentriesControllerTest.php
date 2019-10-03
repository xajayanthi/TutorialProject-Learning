<?php
/**
 * Created by PhpStorm.
 * User: xearts
 * Date: 2019-10-03
 * Time: 12:37
 */

// /tests/Controller/BlogentriesControllerTest.php

namespace App\tests\Controller;


use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

Class BlogentriesControllerTest extends WebTestCase
{
    public function testShowIndex()
    {
        $client = static::createClient();

        $client->request('GET', '/blogentries/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}
