<?php

namespace Caas23\Project;

use Caas23\Entity\EnergySupply;
use Caas23\Project\EnergySupplyFunctions;
use Caas23\Repository\EnergySupplyRepository;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;


/**
 * Test cases for class EnergySupplyFunctions.
 */
class EnergySupplyFunctionsTest extends KernelTestCase
{
    private $doctrine;

    protected function setUp(): void
    {
        $this->doctrine = self::getContainer()
            ->get('Doctrine\Persistence\ManagerRegistry');
    }

    /**
     * Test get data.
     */
    public function testGetData(): void
    {       
        $func = new EnergySupplyFunctions();

        $entityManager = $this->doctrine->getManager();
        $entityManager->createQuery('DELETE FROM Caas23\Entity\EnergySupply')->execute();
        
        $entity = new EnergySupply();
        $func->add($entity);
        
        $entityManager->persist($entity);
        $entityManager->flush();

        $result72 = $func->get72(array($entity));
        $result82 = $func->get82(array($entity));
        $result92 = $func->get92(array($entity));
        $result02 = $func->get02(array($entity));
        $result12 = $func->get12(array($entity));
        $result22 = $func->get22(array($entity));
        $resultAll = $func->getAll(array($entity));
        $this->assertNotEmpty($result72);
        $this->assertNotEmpty($result82);
        $this->assertNotEmpty($result92);
        $this->assertNotEmpty($result02);
        $this->assertNotEmpty($result12);
        $this->assertNotEmpty($result22);
        $this->assertNotEmpty($resultAll);
    }
}
