<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Review;
use App\Form\ReviewType;

class ReviewController extends AbstractController
{
    /**
     * @Route("/review", name="review" )
     */
    public function index(): Response
    {
       
        $review = new Review();
        $formulaire = $this->createForm(ReviewType::class, $review);

        return $this->renderForm('review/index.html.twig', [
           
            'formulaire' => $formulaire
        ]);
    }
}
