<?php

namespace App\Controller;

use App\Models\Cursus;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route(name="main_")
 */

class MainController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function list(): Response
    {
        $modelsCursus = new Cursus();
        
        //return new Response("symfony");

        return $this->render('main/home.html.twig',
            [
                "cursus" => $modelsCursus->getAllCursus(),
            ]
         );
    }


    /**
     * @Route("/show/{id}", name="show", requirements={"id": "\d+"})
     */
    public function show($id) : Response
    {
        $modelCursusById = new Cursus($id);

        return $this->render('main/show.html.twig',
            [
                "cursusById" => $modelCursusById->getCursusById($id),
            ]
        );
    }

    /**
     *  @Route("/theme/toogle", name="theme_switcher")
     */
    public function themeSwitcher(SessionInterface $session)
    {
        //class qui gère les sessions (SessionInterface) pour pouvoir l'utiliser j'utilise l'injection de dépendance
        $theme = $session->get('theme', 'secondTheme');

        if ($theme == 'secondTheme'){
            $session->set('theme', 'firstTheme');
        }else{
            $session->set('theme', 'secondTheme');
        }
        
        return $this->redirectToRoute("main_home");
    }


}