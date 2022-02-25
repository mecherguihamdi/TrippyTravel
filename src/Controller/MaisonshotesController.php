<?php

namespace App\Controller;

use App\Entity\Maisonshotes;

use App\Form\MaisonshotesType;
use App\Repository\MaisonshotesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/")
 */
class MaisonshotesController extends AbstractController
{
    /**
     * @Route("/maisonshotes", name="maisonshotes_index", methods={"GET"})
     */
    public function index(MaisonshotesRepository $maisonshotesRepository): Response
    {
        return $this->render('maisonshotes/indexfront.html.twig', [
            'maisonshotes' => $maisonshotesRepository->findAll(),
        ]);
    }
    /**
     * @Route("/admin-dashboard/maisonshote", name="admin-dashboard/maisonshote")
     */
    public function admin_index(MaisonshotesRepository $maisonshotesRepository): Response

    {
        return $this->render('maisonshotes/admin_index.html.twig', [
            'maisonshotes' => $maisonshotesRepository->findAll(),
        ]);
        //return $this->render('maisonshotes/admin_index.html.twig', [
          //  'controller_name' => 'MaisonshotesController',
      //  ]);
    }

    /**
     * @Route("/new", name="maisonshotes_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $maisonshote = new Maisonshotes();
        $form = $this->createForm(MaisonshotesType::class, $maisonshote);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($maisonshote);
            $entityManager->flush();

            return $this->redirectToRoute('admin-dashboard/maisonshote', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('maisonshotes/new.html.twig', [
            'maisonshote' => $maisonshote,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="maisonshotes_show", methods={"GET"})
     */
    public function show(Maisonshotes $maisonshote): Response
    {
        return $this->render('maisonshotes/show.html.twig', [
            'maisonshote' => $maisonshote,
        ]);
    }

    /**
     * @Route("/edit/{id}", name="maisonshotes_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Maisonshotes $maisonshote, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(MaisonshotesType::class, $maisonshote);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('maisonshotes_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('maisonshotes/edit.html.twig', [
            'maisonshote' => $maisonshote,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="maisonshotes_delete", methods={"POST"})
     */
    public function delete(Request $request, Maisonshotes $maisonshote, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$maisonshote->getId(), $request->request->get('_token'))) {
            $entityManager->remove($maisonshote);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin-dashboard/maisonshote', [], Response::HTTP_SEE_OTHER);
    }
}
