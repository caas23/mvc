<?php

namespace Caas23\Project;

use Caas23\Entity\DeceasedCovid;
use Caas23\Project\DeceasedCovidFunctions;
use Caas23\Repository\DeceasedCovidRepository;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;


/**
 * Test cases for class DeceasedGeneraFunctions.
 */
class DeceasedCovidFunctionsTest extends KernelTestCase
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
        $func = new DeceasedCovidFunctions();

        $entityManager = $this->doctrine->getManager();
        $entityManager->createQuery('DELETE FROM Caas23\Entity\DeceasedCovid')->execute();
        
        $entity = new DeceasedCovid();
        $func->add($entity);
        $func->addAge($entity);
        $func->addGroup($entity);
        
        $entityManager->persist($entity);
        $entityManager->flush();

        $resultAllDeceased = $func->getAllDeceased(array($entity));
        $resultDeceasedByAgeTotal = $func->getDeceasedByAgeTotal(array($entity));
        $resultDeceasedByAgeMen = $func->getDeceasedByAgeMen(array($entity));
        $resultDeceasedByAgeWomen = $func->getDeceasedByAgeWomen(array($entity));
        $resultDeceasedByGroupTotal = $func->getDeceasedByGroupTotal(array($entity));
        $resultDeceasedByGroupMen = $func->getDeceasedByGroupMen(array($entity));
        $resultDeceasedByGroupWomen = $func->getDeceasedByGroupWomen(array($entity));
        $resultDeceasedByHomeTotal = $func->getDeceasedByHomeTotal(array($entity));
        $resultDeceasedByHomeMen = $func->getDeceasedByHomeMen(array($entity));
        $resultDeceasedByHomeWomen = $func->getDeceasedByHomeWomen(array($entity));
        $resultDeceasedByPlaceTotal = $func->getDeceasedByPlaceTotal(array($entity));
        $resultDeceasedByPlaceMen = $func->getDeceasedByPlaceMen(array($entity));
        $resultDeceasedByPlaceWomen = $func->getDeceasedByPlaceWomen(array($entity));
        $resultDeceasedByAge = $func->getDeceasedByAge(array($entity));

        $this->assertNotEmpty($resultAllDeceased);
        $this->assertNotEmpty($resultDeceasedByAgeTotal);
        $this->assertNotEmpty($resultDeceasedByAgeMen);
        $this->assertNotEmpty($resultDeceasedByAgeWomen);
        $this->assertNotEmpty($resultDeceasedByGroupTotal);
        $this->assertNotEmpty($resultDeceasedByGroupMen);
        $this->assertNotEmpty($resultDeceasedByGroupWomen);
        $this->assertNotEmpty($resultDeceasedByHomeTotal);
        $this->assertNotEmpty($resultDeceasedByHomeMen);
        $this->assertNotEmpty($resultDeceasedByHomeWomen);
        $this->assertNotEmpty($resultDeceasedByPlaceTotal);
        $this->assertNotEmpty($resultDeceasedByPlaceMen);
        $this->assertNotEmpty($resultDeceasedByPlaceWomen);
        $this->assertNotEmpty($resultDeceasedByAge);
    }
}
