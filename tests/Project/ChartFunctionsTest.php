<?php

namespace Caas23\Project;

use Doctrine\ORM\EntityRepository;

use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class ChartFunctions.
 */
class ChartFunctionsTest extends TestCase
{

    /**
     * Creeate.
     */
    public function testCreate(): void
    {
        $func = new ChartFunctions();
        $this->assertInstanceOf("\Caas23\Project\ChartFunctions", $func);
    }
    

    /**
     * Test set options.
     */
    public function testSetOptionsDoughnutHealth(): void
    {       
        $func = new ChartFunctions();
        $chartBuilder = $this->createMock('Symfony\UX\Chartjs\Builder\ChartBuilderInterface');
        $chart = $chartBuilder->createChart(Chart::TYPE_DOUGHNUT);
        $func->setOptionsDoughnutHealth($chart, 'unit testing');
        $this->assertInstanceOf('Symfony\UX\Chartjs\Builder\ChartBuilderInterface', $chartBuilder);
        $this->assertInstanceOf('Symfony\UX\Chartjs\Model\Chart', $chart);
    }
    
    /**
     * Test set options.
     */
    public function testSetOptionsBarHealth(): void
    {       
        $func = new ChartFunctions();
        $chartBuilder = $this->createMock('Symfony\UX\Chartjs\Builder\ChartBuilderInterface');
        $chart = $chartBuilder->createChart(Chart::TYPE_BAR);
        $func->setOptionsBarHealth($chart, 'unit testing');
        $this->assertInstanceOf('Symfony\UX\Chartjs\Builder\ChartBuilderInterface', $chartBuilder);
        $this->assertInstanceOf('Symfony\UX\Chartjs\Model\Chart', $chart);
    }
   
    /**
     * Test set options.
     */
    public function testSetOptionsEnergy(): void
    {       
        $func = new ChartFunctions();
        $chartBuilder = $this->createMock('Symfony\UX\Chartjs\Builder\ChartBuilderInterface');
        $chart = $chartBuilder->createChart(Chart::TYPE_BAR);
        $func->setOptionsEnergy($chart, 'unit testing');
        $this->assertInstanceOf('Symfony\UX\Chartjs\Builder\ChartBuilderInterface', $chartBuilder);
        $this->assertInstanceOf('Symfony\UX\Chartjs\Model\Chart', $chart);
    }
    
    /**
     * Test set data.
     */
    public function testSetDataDoughnutHealth(): void
    {       
        $func = new ChartFunctions();
        $chartBuilder = $this->createMock('Symfony\UX\Chartjs\Builder\ChartBuilderInterface');
        $chart = $chartBuilder->createChart(Chart::TYPE_DOUGHNUT);
        $covidFunctions = $this->createMock('Caas23\Project\DeceasedCovidFunctions');

        $mockRepository = $this
            ->getMockBuilder(EntityRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();

        $input = $mockRepository->findAll();
        $func->setDataDoughnutHealth($chart, $input);
        $this->assertInstanceOf('Symfony\UX\Chartjs\Builder\ChartBuilderInterface', $chartBuilder);
        $this->assertInstanceOf('Symfony\UX\Chartjs\Model\Chart', $chart);
        $this->assertInstanceOf('Caas23\Project\DeceasedCovidFunctions', $covidFunctions);
        $this->assertInstanceOf('Doctrine\ORM\EntityRepository', $mockRepository);
    }

    /**
     * Test set data.
     */
    public function testSetDataBarHealth(): void
    {       
        $func = new ChartFunctions();
        $chartBuilder = $this->createMock('Symfony\UX\Chartjs\Builder\ChartBuilderInterface');
        $chart = $chartBuilder->createChart(Chart::TYPE_DOUGHNUT);
        $covidFunctions = $this->createMock('Caas23\Project\DeceasedCovidFunctions');

        $mockRepository = $this
            ->getMockBuilder(EntityRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();

        $labels = ['unit', 'test'];
        $input = $mockRepository->findAll();
        $func->setDataBarHealth($chart, $labels, $input, 5);
        $func->setDataBarHealth($chart, $labels, $input, 5, 'Place');
        $this->assertInstanceOf('Symfony\UX\Chartjs\Builder\ChartBuilderInterface', $chartBuilder);
        $this->assertInstanceOf('Symfony\UX\Chartjs\Model\Chart', $chart);
        $this->assertInstanceOf('Caas23\Project\DeceasedCovidFunctions', $covidFunctions);
        $this->assertInstanceOf('Doctrine\ORM\EntityRepository', $mockRepository);
    }
   
    /**
     * Test set data.
     */
    public function testSetDataEnergyUse(): void
    {       
        $func = new ChartFunctions();
        $chartBuilder = $this->createMock('Symfony\UX\Chartjs\Builder\ChartBuilderInterface');
        $chart = $chartBuilder->createChart(Chart::TYPE_DOUGHNUT);
        $covidFunctions = $this->createMock('Caas23\Project\DeceasedCovidFunctions');

        $mockRepository = $this
            ->getMockBuilder(EntityRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();

        $labels = ['unit', 'test'];
        $input = $mockRepository->findAll();
        $func->setDataEnergyUse($chart, $labels, $input);
        $this->assertInstanceOf('Symfony\UX\Chartjs\Builder\ChartBuilderInterface', $chartBuilder);
        $this->assertInstanceOf('Symfony\UX\Chartjs\Model\Chart', $chart);
        $this->assertInstanceOf('Caas23\Project\DeceasedCovidFunctions', $covidFunctions);
        $this->assertInstanceOf('Doctrine\ORM\EntityRepository', $mockRepository);
    }
    
    /**
     * Test set data.
     */
    public function testSetDataEnergySupply(): void
    {       
        $func = new ChartFunctions();
        $chartBuilder = $this->createMock('Symfony\UX\Chartjs\Builder\ChartBuilderInterface');
        $chart = $chartBuilder->createChart(Chart::TYPE_DOUGHNUT);
        $covidFunctions = $this->createMock('Caas23\Project\DeceasedCovidFunctions');

        $mockRepository = $this
            ->getMockBuilder(EntityRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();

        $labels = ['unit', 'test'];
        $input = $mockRepository->findAll();
        $func->setDataEnergySupply($chart, $labels, $input);
        $this->assertInstanceOf('Symfony\UX\Chartjs\Builder\ChartBuilderInterface', $chartBuilder);
        $this->assertInstanceOf('Symfony\UX\Chartjs\Model\Chart', $chart);
        $this->assertInstanceOf('Caas23\Project\DeceasedCovidFunctions', $covidFunctions);
        $this->assertInstanceOf('Doctrine\ORM\EntityRepository', $mockRepository);
    }
    
    /**
     * Test set data.
     */
    public function testSetDataEnergyPetro(): void
    {       
        $func = new ChartFunctions();
        $chartBuilder = $this->createMock('Symfony\UX\Chartjs\Builder\ChartBuilderInterface');
        $chart = $chartBuilder->createChart(Chart::TYPE_DOUGHNUT);
        $covidFunctions = $this->createMock('Caas23\Project\DeceasedCovidFunctions');

        $mockRepository = $this
            ->getMockBuilder(EntityRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();

        $labels = ['unit', 'test'];
        $input = $mockRepository->findAll();
        $func->setDataEnergyPetro($chart, $labels, $input);
        $this->assertInstanceOf('Symfony\UX\Chartjs\Builder\ChartBuilderInterface', $chartBuilder);
        $this->assertInstanceOf('Symfony\UX\Chartjs\Model\Chart', $chart);
        $this->assertInstanceOf('Caas23\Project\DeceasedCovidFunctions', $covidFunctions);
        $this->assertInstanceOf('Doctrine\ORM\EntityRepository', $mockRepository);
    }
}
