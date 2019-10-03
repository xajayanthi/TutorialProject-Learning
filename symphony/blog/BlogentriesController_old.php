<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Blogentries;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;


class BlogentriesController extends AbstractController
{
    /**
     * @Route("/blogentries", name="blogentries")
     */
    public function createBlogEntry()
    {

        $entityManager = $this->getDoctrine()->getManager();

//        $BlogEntry = new Blogentries();
//        $BlogEntry->setAuthor("C.V.Raman");
//        $BlogEntry->setBlogEntry('Ergonomic and stylish!');
//
//        // tell Doctrine you want to (eventually) save the Product (no queries yet)
//        $entityManager->persist($BlogEntry);
//
//        // actually executes the queries (i.e. the INSERT query)
//        $entityManager->flush();

      $blogEntry_repository = $this->getDoctrine()->getRepository(Blogentries::class)->findAll();

//        return new Response('Saved new BlogEntry with id '.$BlogEntry->getId());
        return $this->render('blogentries/entries.html.twig', ['Entry' =>  $blogEntry_repository]);


    }
}