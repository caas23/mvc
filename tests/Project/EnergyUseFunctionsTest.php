<?php

namespace Caas23\Project;

use Caas23\Entity\EnergyUse;
use Caas23\Project\EnergyUseFunctions;
use Caas23\Repository\EnergyUseRepository;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;


/**
 * Test cases for class EnergyUseFunctions.
 */
class EnergyUseFunctionsTest extends KernelTestCase
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
        $func = new EnergyUseFunctions();

        $entityManager = $this->doctrine->getManager();
        $entityManager->createQuery('DELETE FROM Caas23\Entity\EnergyUse')->execute();
        
        $entity = new EnergyUse();
        $func->add($entity);
        
        $entityManager->persist($entity);
        $entityManager->flush();

        $result07 = $func->get07(array($entity));
        $result12 = $func->get12(array($entity));
        $result17 = $func->get17(array($entity));
        $result22 = $func->get22(array($entity));
        $this->assertNotEmpty($result07);
        $this->assertNotEmpty($result12);
        $this->assertNotEmpty($result17);
        $this->assertNotEmpty($result22);
    }
}
