<?php

namespace Caas23\Project;

use Doctrine\ORM\EntityRepository;
use Doctrine\Persistence\ManagerRegistry;

use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;

// use PHPUnit\Framework\TestCase;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

/**
 * Test cases for class ChartFunctions.
 */
class ChartFunctions2Test extends KernelTestCase
{
    private $doctrine; //@phpstan-ignore-line (doctrine)

    protected function setUp(): void
    {
        $this->doctrine = self::getContainer()
            ->get('Doctrine\Persistence\ManagerRegistry');
    }


    /**
     * Creeate.
     */
    public function testSetUpHealth(): void
    {

        $doctrine = $this->doctrine;
        $func = new ChartFunctions();
        $func->setUpHealth($doctrine);
        $this->assertInstanceOf("\Caas23\Project\ChartFunctions", $func);
        $this->assertInstanceOf("Doctrine\Persistence\ManagerRegistry", $doctrine);
    }

    /**
     * Creeate.
     */
    public function testSetUpEnergy(): void
    {

        $doctrine = $this->doctrine;
        $func = new ChartFunctions();
        $func->setUpEnergy($doctrine);
        $this->assertInstanceOf("\Caas23\Project\ChartFunctions", $func);
        $this->assertInstanceOf("Doctrine\Persistence\ManagerRegistry", $doctrine);
    }
}
