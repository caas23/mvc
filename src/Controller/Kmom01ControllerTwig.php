<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Kmom01ControllerTwig extends AbstractController
{
    #[Route("/", name: "presentation")]
    public function presentation(): Response
    {
        return $this->render('Kmom01/presentation.html.twig');
    }

    #[Route("/about", name: "about")]
    public function about(): Response
    {
        return $this->render('Kmom01/about.html.twig');
    }

    #[Route("/report", name: "report")]
    public function report(): Response
    {
        return $this->render('Shared/report.html.twig');
    }

    #[Route("/lucky", name: "lucky")]
    public function lucky(): Response
    {
        $number = random_int(100, 999);
        $num1 = str_split($number, 1)[0];
        $num2 = str_split($number, 1)[1];
        $num3 = str_split($number, 1)[2];

        $data = [
            'number' => $number,
            'num1' => $num1,
            'num2' => $num2,
            'num3' => $num3
        ];

        return $this->render('Kmom01/lucky.html.twig', $data);
    }
}
