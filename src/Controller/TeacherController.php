<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeacherController extends AbstractController
{
    #[Route('/teacher', name: 'app_teacher')]
    public function index(): Response
    {
        return $this->render('teacher/index.html.twig', [
            'controller_name' => 'TeacherController',
        ]);

    }
    #[Route('/teacher/{name}', methods: ['GET', 'HEAD'])]
    public function show(string $name): Response
    {

        return $this->render('teacher/index.html.twig', [
            'controller_name' => $name,
        ]);

    }
    public function goToIndex()
    {
        return $this->redirectToRoute('student/index.html.twig');
    }


}