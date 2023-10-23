<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CircuitRepository;
use App\Entity\Circuit;
use Doctrine\ORM\EntityManagerInterface;

class CircuitController extends AbstractController
{



    /**
     * @Route("/circuit/{id}", name="circuit", requirements={"id": "\d+"})
     */
    public function show(CircuitRepository $circuitRepo, int $id): Response
    {
        $circuit = $circuitRepo->find($id);
        //dump($circuit);
        //dd($circuit);

        return $this->render('circuit/show.html.twig',
            
            [
       
            'circuit' => $circuit
            ]
        );
    }


    /**
     * @Route("/", name="cursus")
     */
    public function list(circuitRepository $circuitRepository): Response
    {
        $cursus = $circuitRepository->findAll();
   
    
        return $this->render(
            'circuit/home.html.twig',
            [
                "cursus" => $cursus,
            ]
        );
    }



    /**
    * @Route("/cursus/create", name="cursus_create")
    */
    public function create(EntityManagerInterface $doctrine)
    {

        $newCursus = new Circuit();
        $newCursus->setTitle("MBA ping pong");
        $newCursus->setDescription("MBA ping pong");
        $newCursus->setDuration(4);
        $newCursus->setDifficulties(5);
        $newCursus->setSuccess(90);
        $newCursus->setDiplomas(6);
        $newCursus->setPicture('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzIxGr3fYeh-l173RsqkMkOrClQVDmxYirxA&usqp=CAU');



        //dump($newCursus);

        $doctrine->persist($newCursus);

        $doctrine->flush();

        //dd($newCursus);

        return $this->redirectToRoute("cursus");

    }

    /**
     * @Route("/cursus/update/{id}", requirements={"id": "\d+"})
     */
    public function update($id, CircuitRepository $circuitRep, EntityManagerInterface $doctrine)
    {

        $cursus = $circuitRep->find($id);

        $cursus->setTitle('Ahlam ' . mt_rand(2, 99));


        $doctrine->flush();


        return $this->redirectToRoute("circuit", array("id" => $id));


    }
    

    /**
     * @Route("/cursus/delete/{id}", requirements={"id": "\d+"})
     */
    public function delete($id, CircuitRepository $circuitRep, EntityManagerInterface $doctrine)
    {

        $cursus = $circuitRep->find($id);

        $doctrine->remove($cursus);
    
        $doctrine->flush();


        return $this->redirectToRoute("cursus");


    }


























}
