<?php

namespace App\Controller;

use App\Entity\Blogentries;
use App\Form\BlogentriesType;
use App\Repository\BlogentriesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/blogentries")
 */
class BlogentriesController extends AbstractController
{
    /**
     * @Route("/", name="blogentries_index", methods={"GET"})
     */
    public function index(BlogentriesRepository $blogentriesRepository): Response
    {
        return $this->render('blogentries/index.html.twig', [
            'blogentries' => $blogentriesRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="blogentries_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $blogentry = new Blogentries();
        $form = $this->createForm(BlogentriesType::class, $blogentry);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($blogentry);
            $entityManager->flush();

            return $this->redirectToRoute('blogentries_index');
        }

        return $this->render('blogentries/new.html.twig', [
            'blogentry' => $blogentry,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="blogentries_show", methods={"GET"})
     */
    public function show(Blogentries $blogentry): Response
    {
        return $this->render('blogentries/show.html.twig', [
            'blogentry' => $blogentry,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="blogentries_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Blogentries $blogentry): Response
    {
        $form = $this->createForm(BlogentriesType::class, $blogentry);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('blogentries_index');
        }

        return $this->render('blogentries/edit.html.twig', [
            'blogentry' => $blogentry,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="blogentries_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Blogentries $blogentry): Response
    {
        if ($this->isCsrfTokenValid('delete'.$blogentry->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($blogentry);
            $entityManager->flush();
        }

        return $this->redirectToRoute('blogentries_index');
    }
}
