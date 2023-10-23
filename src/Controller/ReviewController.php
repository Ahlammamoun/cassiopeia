<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Review;
use App\Entity\Circuit;
use App\Repository\CircuitRepository;
use App\Form\ReviewType;

class ReviewController extends AbstractController
{
    /**
     * @Route("/circuit/{id}/review", name="circuit_review_add")
     */
    public function show(CircuitRepository $circuitRepo, int $id): Response
    {
        $circuit = $circuitRepo->find($id);

        $review = new Review();
        $formulaire = $this->createForm(ReviewType::class, $review);

        //dd($circuit);

        return $this->renderForm('review/add.html.twig', [
            'circuit' => $circuit,
            'formulaire' => $formulaire
        ]);
    }
}
