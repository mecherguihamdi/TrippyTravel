<?php

namespace App\Controller;

use App\Entity\Attraction;
use App\Form\AttractionType;
use App\Repository\AttractionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;

    /**
     * @Route("/")
     */
class AttractionController extends AbstractController
{
    /**
     * @Route("/attraction_index", name="attraction_index", methods={"GET"})
     */
    public function index(Request $request, PaginatorInterface $paginator): Response
    {
        $rep=$this->getDoctrine()->getRepository(Attraction::class);
        
        $attraction =$rep-> findAll();
        $attraction = $paginator->paginate(
            $attraction, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            3 // Nombre de résultats par page
        );
      
        return $this->render('attraction/index.html.twig', [
            'attraction' => $attraction,
           
        ]);
        
    }
     /**
     * @Route("/attraction_indexMap", name="attraction_indexMap", methods={"GET"})
     */

    public function indexMap(AttractionRepository $AttractionRepository): Response
    {
        return $this->render('attraction/indexMap.html.twig', [
            'attraction' => $AttractionRepository->findAll(),
        ]);
    }

        /**
     * @Route("/admin-dashboard/attraction", name="admin-dashboard/attraction")
     */
    public function admin_index(AttractionRepository $attractionRepository): Response
    {
        return $this->render('attraction/admin_index.html.twig', [
            'attractions' => $attractionRepository->findAll(),
        ]);
    }

    /**
   * @Route("/searchA", name="ajax_searchA")
   */
public function searchAction(Request $request,AttractionRepository $repository)
{
    $em = $this->getDoctrine()->getManager();
    $libelle = $request->get('q');
    if($request->get('q')){
        $attraction =$em->getRepository(Attraction::class)->findEntitiesByLibelle($libelle);
        if(!$attraction ) {
            $result['attraction ']['error'] = "Attraction introuvable !";
        } else {
            $result['attraction '] = $this->getRealEntities($attraction );
        }
    }else{
        $result['attraction '] = $this->getRealEntities($repository->findAll());
    }

    return new Response(json_encode($result));
}

public function getRealEntities($attraction ){
    foreach ($attraction  as $attraction ){
        $realEntities[$attraction ->getId()] = [$attraction->getLibelle(),$attraction->getLocalisation(),$attraction->getHorraire(), $attraction->getPrix(), $attraction->getIdCategorie(), "uploads/images/attraction/".$attraction->getImage()];
    }
    return $realEntities;
}

    /**
     * @Route("/admin-dashboard/attraction/new", name="attraction_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $attraction = new Attraction();
        $form = $this->createForm(AttractionType::class, $attraction);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($attraction);
            $entityManager->flush();

            return $this->redirectToRoute('admin-dashboard/attraction', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('attraction/new.html.twig', [
            'attraction' => $attraction,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("admin-dashboard/attraction/{id}", name="attraction_show", methods={"GET"})
     */
    public function show(Attraction $attraction): Response
    {
        return $this->render('attraction/show.html.twig', [
            'attraction' => $attraction,
        ]);

    }

    /**
     * @Route("admin-dashboard/attraction/{id}/edit", name="attraction_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Attraction $attraction, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AttractionType::class, $attraction);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('admin-dashboard/attraction', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('attraction/edit.html.twig', [
            'attraction' => $attraction,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="attraction_delete", methods={"POST"})
     */
    public function delete(Request $request, Attraction $attraction, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$attraction->getId(), $request->request->get('_token'))) {
            $entityManager->remove($attraction);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin-dashboard/attraction', [], Response::HTTP_SEE_OTHER);
    }
}
