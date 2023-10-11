<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CircuitRepository;


class CircuitController extends AbstractController
{
    /**
     * @Route("/circuit/{id}", name="circuit", requirements={"id": "\d+"})
     */
    public function show(CircuitRepository $circuitRepo, int $id): Response
    {
        $circuit = $circuitRepo->find($id);

        //dd($circuit);

        return $this->render('circuit/show.html.twig', 
        [
       
            'circuit' => $circuit
        ]);
    }


    /**
     * @Route("/", name="cursus")
     */
    public function list(circuitRepository $circuitRepo): Response
    {
        $cursus = $circuitRepo->findAll();
        
        //return new Response("symfony");

        return $this->render('circuit/home.html.twig',
            [
                "cursus" => $cursus,
            ]
         );
    }











}
