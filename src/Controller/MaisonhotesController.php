<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MaisonhotesController extends AbstractController
{
    /**
     * @Route("/maisonhotes", name="maisonhotes")
     */
    public function index(): Response
    {
        return $this->render('maisonhotes/index.html.twig', [
            'controller_name' => 'MaisonhotesController',
        ]);
    }
}
