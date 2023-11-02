<?php

namespace App\Controller\Back;

use App\Entity\Student;
use App\Form\StudentType;
use App\Entity\Circuit;
use App\Entity\Teacher;
use App\Repository\TeacherRepository;
use App\Repository\CircuitRepository;
use App\Repository\StudentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/back/student")
 */
class StudentController extends AbstractController
{
    /**
     * @Route("/", name="app_back_student_index", methods={"GET"})
     */
    public function index(StudentRepository $studentRepository): Response
    {
        return $this->render('back/student/index.html.twig', [
            'students' => $studentRepository->findAll(),
        ]);
    }
 /**
     * @Route("/circuit/{id}", name="app_back_student_index_circuit", methods={"GET"})
     */
    public function ListOfStudentByCircuit(StudentRepository $studentRepository, circuit $circuit): Response
    {
        $students = $studentRepository->findBy(['circuit'=>$circuit]);

        return $this->render('back/student/index.html.twig', [
            'students' => $students,
        ]);
    }

    /**
     * @Route("/new", name="app_back_student_new", methods={"GET", "POST"})
     */
    public function new(Request $request, StudentRepository $studentRepository): Response
    {
        $student = new Student();
        $form = $this->createForm(StudentType::class, $student);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $studentRepository->add($student, true);

            return $this->redirectToRoute('app_back_student_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back/student/new.html.twig', [
            'student' => $student,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_back_student_show", methods={"GET"})
     */
    public function show(Student $student): Response
    {
        return $this->render('back/student/show.html.twig', [
            'student' => $student,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_back_student_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Student $student, StudentRepository $studentRepository): Response
    {
        $form = $this->createForm(StudentType::class, $student);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $studentRepository->add($student, true);

            return $this->redirectToRoute('app_back_student_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back/student/edit.html.twig', [
            'student' => $student,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_back_student_delete", methods={"POST"})
     */
    public function delete(Request $request, Student $student, StudentRepository $studentRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$student->getId(), $request->request->get('_token'))) {
            $studentRepository->remove($student, true);
        }

        return $this->redirectToRoute('app_back_student_index', [], Response::HTTP_SEE_OTHER);
    }
}
