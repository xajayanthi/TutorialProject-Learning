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
    public function testIndex()
    {
        $client = static::createClient();

        $client->request('GET', '/blogentries/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        $this->assertResponseIsSuccessful();
    }

    public function testHeaderData(){

        $client = static::createClient();

        $client->request('GET', '/blogentries/');

        $this->assertSelectorTextContains('html h1', 'Welcome to our Blog');

        $this->assertSelectorTextContains('html h2', 'Blogentries index');
    }

    public function testShow(){
        $client = static::createClient();

        $crawler = $client->request('GET', '/blogentries/');

//        $link = $crawler->selectLink("show")->link();
        $link = $crawler->filter('a:contains("show")')->eq(0)->link();

        $crawler = $client->click($link);

        $this->assertEquals(3, $crawler->filter('th')->count());
    }


}
