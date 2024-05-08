<?php

namespace Caas23\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class Kmom06Controller extends AbstractController
{
    #[Route("/metrics", name: "metrics")]
    public function metrics(): Response
    {
        return $this->render('Kmom06/metrics.html.twig');
    }
}
