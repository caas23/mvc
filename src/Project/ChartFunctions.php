<?php

namespace Caas23\Project;

use Caas23\Entity\DeceasedCovid;
use Caas23\Entity\DeceasedGeneral;
use Caas23\Entity\EnergyPetro;
use Caas23\Entity\EnergySupply;
use Caas23\Entity\EnergyUse;

use Caas23\Project\DeceasedCovidFunctions;
use Caas23\Project\DeceasedGeneralFunctions;
use Caas23\Project\EnergyPetroFunctions;
use Caas23\Project\EnergySupplyFunctions;
use Caas23\Project\EnergyUseFunctions;

/**
 * ChartFunctions class handling charts.
 */
class ChartFunctions
{
    private DeceasedCovidFunctions $covidFunctions;
    private EnergyPetroFunctions $petroFunctions;
    private EnergySupplyFunctions $supplyFunctions;
    private EnergyUseFunctions $useFunctions;
    private DeceasedGeneralFunctions $generalFunctions;

    public function __construct()
    {
        $this->covidFunctions = new DeceasedCovidFunctions();
        $this->petroFunctions = new EnergyPetroFunctions();
        $this->supplyFunctions = new EnergySupplyFunctions();
        $this->useFunctions = new EnergyUseFunctions();
        $this->generalFunctions = new DeceasedGeneralFunctions();
    }

    /**
     * Set up for health.
     */
    public function setUpHealth($doctrine): void //@phpstan-ignore-line (doctrine)
    {
        $entityManager = $doctrine->getManager();
        $entityManager->createQuery('DELETE FROM Caas23\Entity\DeceasedCovid')->execute();
        $entityManager->createQuery('DELETE FROM Caas23\Entity\DeceasedGeneral')->execute();

        $entityCovid = new DeceasedCovid();
        $this->covidFunctions->add($entityCovid);
        $this->covidFunctions->addAge($entityCovid);
        $this->covidFunctions->addGroup($entityCovid);

        $entityGeneral = new DeceasedGeneral();
        $this->generalFunctions->add($entityGeneral);

        $entityManager->persist($entityCovid);
        $entityManager->persist($entityGeneral);
        $entityManager->flush();
    }

    /**
     * Set data for health charts.
     * @param array<int|string, \Caas23\Entity\DeceasedCovid> $dataInput
     */
    public function setDataDoughnutHealth(\Symfony\UX\Chartjs\Model\Chart $chart, array $dataInput): void
    {
        $dataOutput = $this->covidFunctions->getAllDeceased($dataInput);
        $dataChart = [];
        foreach ($dataOutput as $d) {
            $dataChart[] = $d;
        }

        $chart->setData([
            'labels' => ['Totalt', 'Män', 'Kvinnor'],
            'datasets' => [
                [
                    'backgroundColor' => ['#3D7F44', '#1FA538', '#5DA94C'],
                    'data' => $dataChart,
                ],
            ],
        ]);
    }

    /**
     * Set options for health charts.
     */
    public function setOptionsDoughnutHealth(\Symfony\UX\Chartjs\Model\Chart $chart, string $title): void
    {
        $chart->setOptions([
            'plugins' => [
                'title' => [
                    'display' => true,
                    'text' => $title,
                    'font' => [
                        'size' => '18px',
                        'family' => 'monospace'
                    ]
                ],
                'legend' => [
                    'labels' => [
                        'color' => '#111',
                        'font' => [
                            'size' => '14px',
                            'family' => 'monospace'
                        ]
                    ],
                ],
            ],
        ]);
    }

    /**
     * Set data for health charts.
     * @param array<int, array<int, string>|string> $labels
     * @param array<int|string, \Caas23\Entity\DeceasedGeneral> $dataInput
     */
    public function setDataBarHealth(\Symfony\UX\Chartjs\Model\Chart $chart, array $labels, array $dataInput, int $number, string $category = null): void
    {
        $dataOutput = [];
        if ($category !== null) {
            $dataOutput = [
                $this->covidFunctions->{'getDeceasedBy' .$category .'Total'}($dataInput),
                $this->covidFunctions->{'getDeceasedBy' .$category .'Men'}($dataInput),
                $this->covidFunctions->{'getDeceasedBy' .$category .'Women'}($dataInput)
            ];
        } if ($category === null) {
            $dataOutput = [
                $this->generalFunctions->getTotal($dataInput),
                $this->generalFunctions->getMen($dataInput),
                $this->generalFunctions->getWomen($dataInput)
            ];
        }

        ${'dataChart' .$number .'Total'} = [];
        foreach ($dataOutput[0] as $d) {
            ${'dataChart' .$number .'Total'}[] = $d;
        }

        ${'dataChart' .$number .'Men'} = [];
        foreach ($dataOutput[1] as $d) {
            ${'dataChart' .$number .'Men'}[] = $d;
        }

        ${'dataChart' .$number .'Women'} = [];
        foreach ($dataOutput[2] as $d) {
            ${'dataChart' .$number .'Women'}[] = $d;
        }

        $chart->setData([
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'Totalt',
                    'backgroundColor' => '#3D7F44',
                    'data' => ${'dataChart' .$number .'Total'},
                ],
                [
                    'label' => 'Män',
                    'backgroundColor' => '#1FA538',
                    'data' => ${'dataChart' .$number .'Men'},
                ],
                [
                    'label' => 'Kvinnor',
                    'backgroundColor' => '#5DA94C',
                    'data' => ${'dataChart' .$number .'Women'},
                ],
            ],
        ]);

    }

    /**
     * Set options for health charts.
     */
    public function setOptionsBarHealth(\Symfony\UX\Chartjs\Model\Chart $chart, string $title): void
    {
        $chart->setOptions([
            'plugins' => [
                'title' => [
                    'display' => true,
                    'text' => $title,
                    'font' => [
                        'size' => '18px',
                        'family' => 'monospace'
                    ]
                ],
                'legend' => [
                    'position' => 'right',
                    'labels' => [
                        'color' => '#111',
                        'font' => [
                            'size' => '14px',
                            'family' => 'monospace'
                        ]
                    ],
                ],
            ],
            'scales' => [
                'y' => [
                    'suggestedMin' => 0,
                    'ticks' => [
                        'color' => '#111',
                        'font' => [
                            'size' => '14px',
                            'family' => 'monospace'
                        ],
                    ],
                ],
                'x' => [
                    'ticks' => [
                        'color' => '#111',
                        'font' => [
                            'size' => '14px',
                            'family' => 'monospace'
                        ],
                        'autoSkip' => false,
                        'maxRotation' => 0,
                        'minRotation' => 0
                    ],
                ],
            ],
        ]);
    }

    /**
     * Set up for energy.
     */
    public function setUpEnergy($doctrine): void //@phpstan-ignore-line (doctrine)
    {
        $entityManager = $doctrine->getManager();
        $entityManager->createQuery('DELETE FROM Caas23\Entity\EnergyPetro')->execute();
        $entityManager->createQuery('DELETE FROM Caas23\Entity\EnergySupply')->execute();
        $entityManager->createQuery('DELETE FROM Caas23\Entity\EnergyUse')->execute();

        $entityEnergyPetro = new EnergyPetro();
        $this->petroFunctions->add($entityEnergyPetro);

        $entityEnergySupply = new EnergySupply();
        $this->supplyFunctions->add($entityEnergySupply);

        $entityEnergyUse = new EnergyUse();
        $this->useFunctions->add($entityEnergyUse);

        $entityManager->persist($entityEnergyPetro);
        $entityManager->persist($entityEnergySupply);
        $entityManager->persist($entityEnergyUse);
        $entityManager->flush();
    }

    /**
     * Set data for energy use charts.
     * @param array<int, array<int, string>|string> $labels
     * @param array<int|string, mixed> $dataInput
     */
    public function setDataEnergyUse(\Symfony\UX\Chartjs\Model\Chart $chart, array $labels, array $dataInput): void
    {

        $dataOutput = [
            $this->useFunctions->{'get07'}($dataInput),
            $this->useFunctions->{'get12'}($dataInput),
            $this->useFunctions->{'get17'}($dataInput),
            $this->useFunctions->{'get22'}($dataInput),
        ];


        $year07 = [];
        foreach ($dataOutput[0] as $d) {
            $year07[] = $d;
        }

        $year12 = [];
        foreach ($dataOutput[1] as $d) {
            $year12[] = $d;
        }

        $year17 = [];
        foreach ($dataOutput[2] as $d) {
            $year17[] = $d;
        }

        $year22 = [];
        foreach ($dataOutput[3] as $d) {
            $year22[] = $d;
        }


        $chart->setData([
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => '2007',
                    'backgroundColor' => '#004F71',
                    'borderColor' => '#004F71',
                    'data' => $year07,
                ],
                [
                    'label' => '2012',
                    'backgroundColor' => '#3D7F44',
                    'borderColor' => '#3D7F44',
                    'data' => $year12,
                ],
                [
                    'label' => '2017',
                    'backgroundColor' => '#A21942',
                    'borderColor' => '#A21942',
                    'data' => $year17,
                ],
                [
                    'label' => '2022',
                    'backgroundColor' => '#FBC218',
                    'borderColor' => '#FBC218',
                    'data' => $year22,
                ],
            ],
        ]);

    }

    /**
     * Set data for energy supply charts.
     * @param array<int, string> $labels
     * @param array<int|string, mixed> $dataInput
     */
    public function setDataEnergySupply(\Symfony\UX\Chartjs\Model\Chart $chart, array $labels, array $dataInput): void
    {
        $dataOutput = [
            $this->supplyFunctions->{'get72'}($dataInput),
            $this->supplyFunctions->{'get82'}($dataInput),
            $this->supplyFunctions->{'get92'}($dataInput),
            $this->supplyFunctions->{'get02'}($dataInput),
            $this->supplyFunctions->{'get12'}($dataInput),
            $this->supplyFunctions->{'get22'}($dataInput),
        ];

        $year72 = [];
        foreach ($dataOutput[0] as $d) {$year72[] = $d;}

        $year82 = [];
        foreach ($dataOutput[1] as $d) {$year82[] = $d;}

        $year92 = [];
        foreach ($dataOutput[2] as $d) {$year92[] = $d;}

        $year02 = [];
        foreach ($dataOutput[3] as $d) {$year02[] = $d;}

        $year12 = [];
        foreach ($dataOutput[4] as $d) {$year12[] = $d;}

        $year22 = [];
        foreach ($dataOutput[5] as $d) {$year22[] = $d;}


        $chart->setData([
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => '1972',
                    'backgroundColor' => '#004F71',
                    'borderColor' => '#004F71',
                    'data' => $year72,
                ],
                [
                    'label' => '1982',
                    'backgroundColor' => '#3D7F44',
                    'borderColor' => '#3D7F44',
                    'data' => $year82,
                ],
                [
                    'label' => '1992',
                    'backgroundColor' => '#A21942',
                    'borderColor' => '#A21942',
                    'data' => $year92,
                ],
                [
                    'label' => '2002',
                    'backgroundColor' => '#FBC218',
                    'borderColor' => '#FBC218',
                    'data' => $year02,
                ],
                [
                    'label' => '2012',
                    'backgroundColor' => '#0097DA',
                    'borderColor' => '#0097DA',
                    'data' => $year12,
                ],
                [
                    'label' => '2022',
                    'backgroundColor' => '#E50E2C',
                    'borderColor' => '#E50E2C',
                    'data' => $year22,
                ],
            ],
        ]);

    }

    /**
     * Set data for energy petro charts.
     * @SuppressWarnings(PHPMD) (NPath)
     * @param array<int, string> $labels
     * @param array<int|string, mixed> $dataInput
     */
    public function setDataEnergyPetro(\Symfony\UX\Chartjs\Model\Chart $chart, array $labels, array $dataInput): void
    {
        $dataOutput = [
            $this->petroFunctions->{'get87'}($dataInput),
            $this->petroFunctions->{'get92'}($dataInput),
            $this->petroFunctions->{'get97'}($dataInput),
            $this->petroFunctions->{'get02'}($dataInput),
            $this->petroFunctions->{'get07'}($dataInput),
            $this->petroFunctions->{'get12'}($dataInput),
            $this->petroFunctions->{'get17'}($dataInput),
            $this->petroFunctions->{'get22'}($dataInput),
        ];

        $year87 = [];
        foreach ($dataOutput[0] as $d) {$year87[] = $d;}

        $year92 = [];
        foreach ($dataOutput[1] as $d) {$year92[] = $d;}

        $year97 = [];
        foreach ($dataOutput[2] as $d) {$year97[] = $d;}

        $year02 = [];
        foreach ($dataOutput[3] as $d) {$year02[] = $d;}

        $year07 = [];
        foreach ($dataOutput[4] as $d) {$year07[] = $d;}

        $year12 = [];
        foreach ($dataOutput[5] as $d) {$year12[] = $d;}

        $year17 = [];
        foreach ($dataOutput[6] as $d) {$year17[] = $d;}

        $year22 = [];
        foreach ($dataOutput[7] as $d) {$year22[] = $d;}

        $chart->setData([
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => '1987',
                    'backgroundColor' => '#004F71',
                    'borderColor' => '#004F71',
                    'data' => $year87,
                ],
                [
                    'label' => '1992',
                    'backgroundColor' => '#3D7F44',
                    'borderColor' => '#3D7F44',
                    'data' => $year92,
                ],
                [
                    'label' => '1997',
                    'backgroundColor' => '#A21942',
                    'borderColor' => '#A21942',
                    'data' => $year97,
                ],
                [
                    'label' => '2002',
                    'backgroundColor' => '#FBC218',
                    'borderColor' => '#FBC218',
                    'data' => $year02,
                ],
                [
                    'label' => '2007',
                    'backgroundColor' => '#0097DA',
                    'borderColor' => '#0097DA',
                    'data' => $year07,
                ],
                [
                    'label' => '2012',
                    'backgroundColor' => '#E50E2C',
                    'borderColor' => '#E50E2C',
                    'data' => $year12,
                ],
                [
                    'label' => '2017',
                    'backgroundColor' => '#1FA538',
                    'borderColor' => '#1FA538',
                    'data' => $year17,
                ],
                [
                    'label' => '2022',
                    'backgroundColor' => '#EC58A1',
                    'borderColor' => '#EC58A1',
                    'data' => $year22,
                ],
            ],
        ]);

    }

    /**
     * Set options for energy charts.
     */
    public function setOptionsEnergy(\Symfony\UX\Chartjs\Model\Chart $chart, string $title): void
    {
        $chart->setOptions([
            'plugins' => [
                'title' => [
                    'display' => true,
                    'text' => $title,
                    'font' => [
                        'size' => '18px',
                        'family' => 'monospace'
                    ]
                ],
                'legend' => [
                    'position' => 'right',
                    'labels' => [
                        'color' => '#111',
                        'font' => [
                            'size' => '14px',
                            'family' => 'monospace'
                        ]
                    ],
                ],
            ],
            'scales' => [
                'y' => [
                    'suggestedMin' => 0,
                    'ticks' => [
                        'color' => '#111',
                        'font' => [
                            'size' => '14px',
                            'family' => 'monospace'
                        ],
                    ],
                ],
                'x' => [
                    'ticks' => [
                        'color' => '#111',
                        'font' => [
                            'size' => '14px',
                            'family' => 'monospace'
                        ],
                        'autoSkip' => false,
                        'maxRotation' => 0,
                        'minRotation' => 0
                    ],
                ],
            ],
        ]);
    }
}
