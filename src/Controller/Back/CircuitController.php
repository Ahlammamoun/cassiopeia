<?php

namespace App\Controller\Back;

use App\Entity\Circuit;
use App\Form\CircuitType;
use App\Repository\CircuitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/back/circuit")
 */
class CircuitController extends AbstractController
{
    /**
     * @Route("/", name="app_back_circuit_index", methods={"GET"})
     */
    public function index(CircuitRepository $circuitRepository): Response
    {
        return $this->render('back/circuit/index.html.twig', [
            'circuits' => $circuitRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_back_circuit_new", methods={"GET", "POST"})
     */
    public function new(Request $request, CircuitRepository $circuitRepository): Response
    {
        $circuit = new Circuit();
        $form = $this->createForm(CircuitType::class, $circuit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $circuitRepository->add($circuit, true);

            return $this->redirectToRoute('app_back_circuit_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back/circuit/new.html.twig', [
            'circuit' => $circuit,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_back_circuit_show", methods={"GET"})
     */
    public function show(Circuit $circuit): Response
    {
        return $this->render('back/circuit/show.html.twig', [
            'circuit' => $circuit,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_back_circuit_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Circuit $circuit, CircuitRepository $circuitRepository ): Response
    {
        $form = $this->createForm(CircuitType::class, $circuit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $circuitRepository->add($circuit, true);

            $this->addFlash(
                'notice',
                'les modifications ont bien été sauvegardées!'
            );

            return $this->redirectToRoute('app_back_circuit_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back/circuit/edit.html.twig', [
            'circuit' => $circuit,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_back_circuit_delete", methods={"POST"})
     */
    public function delete(Request $request, Circuit $circuit, CircuitRepository $circuitRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$circuit->getId(), $request->request->get('_token'))) {
            $circuitRepository->remove($circuit, true);
        } else {
            $this->addFlash(
                'error',
                'les modifications n\'ont pas été supprimées!'
            );


        }

        return $this->redirectToRoute('app_back_circuit_index', [], Response::HTTP_SEE_OTHER);
    }
}
