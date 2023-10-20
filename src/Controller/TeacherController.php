<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\TeacherRepository;
use App\Entity\Teacher;


class TeacherController extends AbstractController
{
    /**
     * @Route("/teacher", name="teacher")
     */
    public function index(TeacherRepository $teacherRepos): Response
    {
        $teachers = $teacherRepos->orderByLastname();
        

        return $this->render('teacher/index.html.twig', [
            'teachers' => $teachers,
         
        ]);



        
    }
   

}
