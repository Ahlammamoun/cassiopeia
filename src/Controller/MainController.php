<?php

namespace App\Controller;

use App\Models\Cursus;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class MainController extends AbstractController
{
    /**
     * @Route("/", name="main_home")
     */
    public function home(): Response
    {

        $modelCursus = new Cursus();
        
        //return new Response("symfony");

        return $this->render('main/index.html.twig',
            [
                "cursus" => $modelCursus->getAllCursus(),

            ]
    );
    }

}