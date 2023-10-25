<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Review;
use App\Entity\Circuit;
use App\Repository\CircuitRepository;
use App\Form\ReviewType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

class ReviewController extends AbstractController
{
    /**
     * @Route("/circuit/{id}/review", name="circuit_review_add")
     */
    public function show(CircuitRepository $circuitRepo, int $id, Request $request,EntityManagerInterface $doctrine): Response
    {
        $circuit = $circuitRepo->find($id);

        $review = new Review();
        $formulaire = $this->createForm(ReviewType::class, $review);


        //on dit au formulaire de prendre en compte la requete http
        // et de lier les données à la variable $review

        $formulaire->handleRequest($request);
        //dd($circuit);

        if ($formulaire->isSubmitted() && $formulaire->isValid()){

                //$review->setReviews($circuitRepo);
                $review->setReviews($circuit);
                //dd($review);


                $doctrine->persist($review);
                $doctrine->flush();

                return $this->redirectToRoute('circuit', ['id' => $circuit->getId()]);
        }


        return $this->renderForm('review/add.html.twig', [
            'circuit' => $circuit,
            'formulaire' => $formulaire,
            
        ]);
    }
}
