<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\LaureatRepository;
use App\Entity\Laureat;

class LaureatController extends AbstractController
{
  
    /**
     * @Route("laureat", name="laureat")
     */
    public function laureat(LaureatRepository $laureatRepo): Response
    {
     
        $laureats = $laureatRepo->orderByLastname();

        return $this->render(
            'laureat/laureat.html.twig',
            [
                'laureats' => $laureats
            
            ]
        );
    }
}
