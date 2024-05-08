<?php

namespace Caas23\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Kmom01ControllerApi extends AbstractController
{
    #[Route("/api", name: "api", methods: ["GET"])]
    public function api(): Response
    {
        return $this->render('Shared/api.html.twig');
    }

    #[Route("/api/quote", name: "api/quote")]
    public function jsonQuote(): Response
    {
        $quoteNum = random_int(0, 2);
        $quotes = array(
            "The way to get started is to quit talking and begin doing. -Walt Disney",
            "Be yourself; everyone else is already taken. -Oscar Wilde",
            "You must be the change you wish to see in the world. -Mahatma Gandhi",
        );

        date_default_timezone_set('CET');
        $now = date('Y-m-d H:i:s');

        $data = [
            'Citat' => $quotes[$quoteNum],
            'Citatet genererades' => $now
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }
}
