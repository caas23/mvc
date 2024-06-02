<?php

namespace Caas23\Controller;

use Caas23\Project\DeceasedCovidFunctions;
use Caas23\Project\DeceasedGeneralFunctions;
use Caas23\Project\EnergyPetroFunctions;
use Caas23\Project\EnergySupplyFunctions;
use Caas23\Project\EnergyUseFunctions;

use Caas23\Repository\DeceasedCovidRepository;
use Caas23\Repository\DeceasedGeneralRepository;
use Caas23\Repository\EnergyPetroRepository;
use Caas23\Repository\EnergySupplyRepository;
use Caas23\Repository\EnergyUseRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

/**
 * @SuppressWarnings(PHPMD) (CouplingBetweenObjects, value of 13 (13 is maximum number of acceptable dependencies, considered ok here))
 */
class Kmom10ControllerApi extends AbstractController
{
    #[Route("/proj/api", name: "proj_api", methods: ["GET"])]
    public function api(): Response
    {
        return $this->render('Kmom10/api.html.twig');
    }

    #[Route("/proj/api", name: "api_post", methods: ["POST"])]
    public function apiPost(
        Request $request,
    ): Response {

        $year = $request->request->get('year');

        return $this->redirectToRoute('energyuse', ["year" => $year]);
    }

    #[Route("proj/api/energyuse/{year<\d+>}", name: "energyuse", methods: ['GET'])]
    public function apiEnergyUse(
        string $year,
        EnergyUseRepository $useRepository,
    ): Response {
        $useFunctions = new EnergyUseFunctions();

        $dataUse = $useRepository->findAll();

        $all = $useFunctions->{'get'.str_split($year, 2)[1]}($dataUse);

        $data = [
            "Energianvandning arsbasis [TWh]"  => [
                "Total" => (int)implode(array_slice($all, 0, 1)),
                "Biobranslen (fasta)" => (int)implode(array_slice($all, 1, 1)),
                "Biobranslen (flytande)" => (int)implode(array_slice($all, 2, 1)),
                "Biogas" => (int)implode(array_slice($all, 3, 1)),
                "Biogenshushallsavfall" => (int)implode(array_slice($all, 4, 1)),
                "Natur- och stadsgas" => (int)implode(array_slice($all, 5, 1)),
                "Primar vattenkraft" => (int)implode(array_slice($all, 6, 1)),
                "Primar vindkraft" => (int)implode(array_slice($all, 7, 1)),
                "Primar solkraft" => (int)implode(array_slice($all, 8, 1)),
            ]
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }

    #[Route("/proj/api/health/1", name: 'api_health1')]
    public function healthApi1(
        DeceasedCovidRepository $covidRepository,
        DeceasedGeneralRepository $generalRepository,
    ): Response {
        $covidFunctions = new DeceasedCovidFunctions();
        $generalFunctions = new DeceasedGeneralFunctions();

        $dataCovid = $covidRepository->findAll();
        $dataGeneral = $generalRepository->findAll();

        $covid = $covidFunctions->getAllDeceased($dataCovid);
        $general = $generalFunctions->getAll($dataGeneral);

        $data = [
            "Antal dodsfall (Covid)" => $covid,
            "Antal dodsfall (generellt)" => [
                "2017" => array_slice($general, 0, 3),
                "2018" => array_slice($general, 3, 3),
                "2019" => array_slice($general, 6, 3),
                "2020" => array_slice($general, 9, 3),
                "2021" => array_slice($general, 12, 3),
                "2022" => array_slice($general, 15, 3),
                "2023" => array_slice($general, 18, 3),
            ]
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }

    #[Route("/proj/api/health/2", name: 'api_health2')]
    public function healthApi2(
        DeceasedCovidRepository $covidRepository,
    ): Response {
        $covidFunctions = new DeceasedCovidFunctions();

        $dataCovid = $covidRepository->findAll();

        $all = $covidFunctions->getDeceasedByAge($dataCovid);

        $data = [
            "Dodsfall per alder"  => [
                "under 50" => array_slice($all, 0, 3),
                "50-59" => array_slice($all, 3, 3),
                "60-69" => array_slice($all, 6, 3),
                "70-74" => array_slice($all, 9, 3),
                "75-79" => array_slice($all, 12, 3),
                "80-84" => array_slice($all, 15, 3),
                "85-89" => array_slice($all, 18, 3),
                "over 90" => array_slice($all, 21, 3),
            ]
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }

    #[Route("/proj/api/energy/1", name: 'api_energy1')]
    public function energyApi1(
        EnergySupplyRepository $supplyRepository,
    ): Response {
        $supplyFunctions = new EnergySupplyFunctions();

        $dataSupply = $supplyRepository->findAll();

        $all = $supplyFunctions->getAll($dataSupply);

        $data = [
            "Energitillforsel per energivara [TWh]"  => [
                "Biobranslen" => array_slice($all, 0, 6),
                "Natur- och stadsgas" => array_slice($all, 6, 6),
                "Vattenkraft" => array_slice($all, 12, 6),
                "Vindkraft" => array_slice($all, 18, 6),
                "Solkraft" => array_slice($all, 24, 6),
                "Totalt" => array_slice($all, 30, 6),
            ]
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }

    #[Route("/proj/api/energy/2", name: 'api_energy2')]
    public function energyApi2(
        EnergyPetroRepository $petroRepository,
    ): Response {
        $petroFunctions = new EnergyPetroFunctions();

        $dataPetro = $petroRepository->findAll();

        $all = $petroFunctions->getAll($dataPetro);

        $data = [
            "Anvandning av petroleumprodukter per sektor [TWh]"  => [
                "Industri" => array_slice($all, 0, 8),
                "Transport" => array_slice($all, 8, 8),
                "Hushall" => array_slice($all, 16, 8),
                "Totalt" => array_slice($all, 24, 8),
            ]
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }
}
