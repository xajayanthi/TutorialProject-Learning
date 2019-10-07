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

        $client->request('GET', '/blogentries/new');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        $this->assertResponseIsSuccessful();
    }
    /**
     * @dataProvider provideUrls
     */
    public function testPageIsSuccessful($url)
    {
        $client = self::createClient();
        $client->request('GET', $url);

        $this->assertTrue($client->getResponse()->isSuccessful());
    }

    public function provideUrls()
    {
        return [
            ['/blog'],
            ['/blogentries/'],
            // ...
        ];
    }

    public function testShow(){
        $client = static::createClient();

        $crawler = $client->request('GET', '/blogentries/');

//        $link = $crawler->selectLink("show")->link();
        $link = $crawler->filter('a:contains("show")')->eq(0)->link();

        $crawler = $client->click($link);

        $this->assertEquals(3, $crawler->filter('th')->count());
    }

    public function testHeaderData(){

        $client = static::createClient();

        $client->request('GET', '/blogentries/');

        $this->assertSelectorTextContains('html h1', 'Welcome to our Blog');

        $this->assertSelectorTextContains('html h2', 'Blogentries index');
    }


    public function testEditForm(){

       $client = static::createClient();

       $form=$crawler = $client->request('GET', '/blogentries/new')->selectButton('Save')->form();

       $form['blogentries[blog_entry]'] = 'symfony Test';
       $form['blogentries[author]']='Jayanthi';

        $crawler = $client->submit($form);

//       $this->assertEquals(200, $client->getResponse()->getStatusCode());
//        $this->assertTrue($client->getResponse()->isSuccessful());
        $this->assertEquals('/blogentries/', $client->getRequest()->getPathInfo());
        $this->assertSelectorTextContains('html h2', 'Blogentries index');

   }
}
