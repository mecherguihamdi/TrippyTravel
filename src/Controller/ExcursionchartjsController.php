<?php

namespace App\Controller;

use App\Entity\Excursion;
use App\Entity\Excursioncategorie;
use App\Entity\Excursionreservation;
use App\Repository\ExcursioncategorieRepository;
use App\Repository\ExcursionRepository;
use App\Repository\ExcursionreservationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ExcursionchartjsController extends AbstractController
{
    /**
     * @Route("/excursionchartjs", name="excursionchartjs")
     */
    public function index(ExcursioncategorieRepository $excursioncategorieRepository, ExcursionreservationRepository $dailyResultRepository,ExcursionRepository $excursionRepository): Response
    {
        $dailyResults = $dailyResultRepository->findAll();
        $excursions = $excursionRepository->findAll();
        $categories = $excursioncategorieRepository->findAll();

        $labels = [];
        $data = [];

        foreach ($dailyResults as $dailyResult) {
            $labels[] = $dailyResult->getCreatedAt()->format('d/m/Y');
            $data[] = $dailyResult->getPrix();
        }
        return $this->render('excursionchartjs/index.html.twig',[
            "labels"=>$labels,
            "data"=>$data,
        ]);
    }

    /**
     * @Route("/admin-dashboard/getexcursionchartjs1", name="getexcursionchartjs1", methods={"GET"})
     */
    public function chartjs1(Request $request)
    {
        $dailyResultRepository = $this->getDoctrine()->getRepository(Excursionreservation::class);
        $excursionRepository = $this->getDoctrine()->getRepository(Excursion::class);
        $excursioncategorieRepository = $this->getDoctrine()->getRepository(Excursioncategorie::class);
        $dailyResults = $dailyResultRepository->findAll();
        $excursions = $excursionRepository->findAll();
        $categories = $excursioncategorieRepository->findAll();

        $labels = [];
        $data = [];

        foreach ($dailyResults as $dailyResult) {
            $labels[] = $dailyResult->getCreatedAt()->format('d/m/Y');
            $data[] = $dailyResult->getPrix();
        }
        /**chart2**/
        $prix_non_paye =0;
        $prix_success =0;
        foreach ($dailyResults as $dailyResult) {
            $status = $dailyResult->getStatus();
            if ($status==Excursionreservation::RESERVATION_EXCURSION_SUCCESS){
                $prix_success += $dailyResult->getPrix();
            }
            if ($status==Excursionreservation::RESERVATION_EXCURSION_DEFAULT){
                $prix_non_paye += $dailyResult->getPrix();
            }

        }
        /**chart categorie**/
        $categorieLib = [];
        $categorieCount = [];
        $categorieColor = [];
        foreach ($categories as $categorie) {
            $categorieLib[] = $categorie->getLibelle();
            $categorieCount[] = count($categorie->getExcursions());
            $categorieColor[] =  "#".dechex(rand(0x000000, 0xFFFFFF)) ;
        }
        return new JsonResponse(array("labels"=>$labels,"data"=>$data,"prix_non_paye"=>$prix_non_paye,"prix_success"=>$prix_success,"categorieLib"=>$categorieLib,"categorieColor"=>$categorieColor,"categorieCount"=>$categorieCount));
    }

}
