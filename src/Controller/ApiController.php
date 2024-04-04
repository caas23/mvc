<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{
    #[Route("/api", name: "api")]
    public function api(): Response
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

        return $this->render('Shared/api.html.twig', $data);
    }
}
