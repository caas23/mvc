<?php

namespace Caas23\Controller;

use Caas23\Project\ChartFunctions;

use Caas23\Repository\DeceasedCovidRepository;
use Caas23\Repository\DeceasedGeneralRepository;
use Caas23\Repository\EnergyPetroRepository;
use Caas23\Repository\EnergySupplyRepository;
use Caas23\Repository\EnergyUseRepository;

use Doctrine\Persistence\ManagerRegistry;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;

class Kmom10Controller extends AbstractController
{
    #[Route("/proj", name: "proj")]
    public function proj(): Response
    {
        return $this->render('Kmom10/proj.html.twig');
    }

    #[Route("/proj/about", name: "proj_about")]
    public function about(): Response
    {
        return $this->render('Kmom10/about.html.twig');
    }

    #[Route("/proj/about/database", name: "proj_database")]
    public function database(): Response
    {
        return $this->render('Kmom10/database.html.twig');
    }

    #[Route("/proj/health", name: 'health')]
    public function health(
        ManagerRegistry $doctrine,
        DeceasedCovidRepository $covidRepository,
        DeceasedGeneralRepository $generalRepository,
        ChartBuilderInterface $chartBuilder
    ): Response {
        $chartFunctions = new ChartFunctions();

        $chartFunctions->setUpHealth($doctrine);

        $dataCovid = $covidRepository->findAll();
        $dataGeneral = $generalRepository->findAll();

        $chart1 = $chartBuilder->createChart(Chart::TYPE_DOUGHNUT);
        $chartFunctions->setDataDoughnutHealth($chart1, $dataCovid);
        $chartFunctions->setOptionsDoughnutHealth($chart1, 'Totala antal dödsfall');

        $chart2 = $chartBuilder->createChart(Chart::TYPE_BAR);
        $labels2 = ['< 50', '50-59', '60-69', '70-74', '75-79', '80-84', '85-89',  '> 90'];
        $chartFunctions->setDataBarHealth($chart2, $labels2, $dataCovid, 2, 'Age'); //@phpstan-ignore-line
        $chartFunctions->setOptionsBarHealth($chart2, 'Dödsfall per åldersgrupp');


        $chart3 = $chartBuilder->createChart(Chart::TYPE_BAR);
        $labels3 = [
            ['Hjärt- och', 'kärlsjukdom'], 'Högt blodtryck', 'Diabetes', 'Lungsjukdom', 'Ingen grupp', 'En grupp', ['Två eller', 'fler grupper']];
        $chartFunctions->setDataBarHealth($chart3, $labels3, $dataCovid, 3, 'Group'); //@phpstan-ignore-line
        $chartFunctions->setOptionsBarHealth($chart3, 'Dödsfall per sjukdomsgrupp');


        $chart4 = $chartBuilder->createChart(Chart::TYPE_BAR);
        $labels4 = [
            'Särskilt boende',
            'Hemtjänst',
        ];
        $chartFunctions->setDataBarHealth($chart4, $labels4, $dataCovid, 4, 'Home'); //@phpstan-ignore-line
        $chartFunctions->setOptionsBarHealth($chart4, 'Dödsfall per boendeform');


        $chart5 = $chartBuilder->createChart(Chart::TYPE_BAR);
        $labels5 = ['Sjukhus', 'Särskilt boende', 'Ordinärt boende'];
        $chartFunctions->setDataBarHealth($chart5, $labels5, $dataCovid, 5, 'Place'); //@phpstan-ignore-line
        $chartFunctions->setOptionsBarHealth($chart5, 'Dödsfall per dödsplats');


        $chart6 = $chartBuilder->createChart(Chart::TYPE_BAR);
        $labels6 = ['2017', '2018', '2019', '2020', '2021', '2022', '2023'];
        $chartFunctions->setDataBarHealth($chart6, $labels6, $dataGeneral, 6);
        $chartFunctions->setOptionsBarHealth($chart6, 'Dödsfall per år (2017-2023)');

        $charts = [
            'chart1' => $chart1,
            'chart2' => $chart2,
            'chart3' => $chart3,
            'chart4' => $chart4,
            'chart5' => $chart5,
            'chart6' => $chart6,
        ];
        return $this->render('Kmom10/health.html.twig', $charts);
    }

    #[Route("/proj/energy", name: 'energy')]
    public function energy(
        ManagerRegistry $doctrine,
        EnergyPetroRepository $petroRepository,
        EnergySupplyRepository $supplyRepository,
        EnergyUseRepository $useRepository,
        ChartBuilderInterface $chartBuilder
    ): Response {
        $chartFunctions = new ChartFunctions();

        $chartFunctions->setUpEnergy($doctrine);

        $dataEnergyPetro = $petroRepository->findAll();
        $dataEnergySupply = $supplyRepository->findAll();
        $dataEnergyUse = $useRepository->findAll();


        $chart1 = $chartBuilder->createChart(Chart::TYPE_BAR);
        $labels1 = [
            'Total',
            ['Biobränslen', '(total)'],
            ['Biobränslen', '(fasta)'],
            ['Biobränslen', '(flytande)'],
            'Biogas',
            ['Biogent', 'hushållsavfall'],
            ['Natur- och', 'stadsgas'],
            ['Primär', 'vattenkraft'],
            ['Primär', 'vindkraft'],
            ['Primär', 'solkraft'],

        ];
        $chartFunctions->setDataEnergyUse($chart1, $labels1, $dataEnergyUse);
        $chartFunctions->setOptionsEnergy($chart1, 'Energianvändning årsbasis [TWh]');

        $chart2 = $chartBuilder->createChart(Chart::TYPE_BAR);
        $labels2 = [
            'Biobränslen',
            'Natur- och stadsgas',
            'Vattenkraft',
            'Vindkraft',
            'Solkraft',
            'Totalt',

        ];
        $chartFunctions->setDataEnergySupply($chart2, $labels2, $dataEnergySupply);
        $chartFunctions->setOptionsEnergy($chart2, 'Energitillförsel per energivara [TWh]');

        $chart3 = $chartBuilder->createChart(Chart::TYPE_BAR);
        $labels3 = [
            'Industri',
            'Transport',
            'Hushåll',
            'Totalt',

        ];
        $chartFunctions->setDataEnergyPetro($chart3, $labels3, $dataEnergyPetro);
        $chartFunctions->setOptionsEnergy($chart3, 'Användning av petroleumprodukter per sektor [TWh]');

        $charts = [
            'chart1' => $chart1,
            'chart2' => $chart2,
            'chart3' => $chart3,
        ];
        return $this->render('Kmom10/energy.html.twig', $charts);
    }
}
