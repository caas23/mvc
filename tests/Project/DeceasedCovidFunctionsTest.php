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
    private $doctrine; //@phpstan-ignore-line (doctrine)

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

        $resultAll = $func->getAllDeceased(array($entity));
        $resultByAgeTotal = $func->getDeceasedByAgeTotal(array($entity));
        $resultByAgeMen = $func->getDeceasedByAgeMen(array($entity));
        $resultByAgeWomen = $func->getDeceasedByAgeWomen(array($entity));
        $resultByGroupTotal = $func->getDeceasedByGroupTotal(array($entity));
        $resultByGroupMen = $func->getDeceasedByGroupMen(array($entity));
        $resultByGroupWomen = $func->getDeceasedByGroupWomen(array($entity));
        $resultByHomeTotal = $func->getDeceasedByHomeTotal(array($entity));
        $resultByHomeMen = $func->getDeceasedByHomeMen(array($entity));
        $resultByHomeWomen = $func->getDeceasedByHomeWomen(array($entity));
        $resultByPlaceTotal = $func->getDeceasedByPlaceTotal(array($entity));
        $resultByPlaceMen = $func->getDeceasedByPlaceMen(array($entity));
        $resultByPlaceWomen = $func->getDeceasedByPlaceWomen(array($entity));
        $resultByAge = $func->getDeceasedByAge(array($entity));

        $this->assertNotEmpty($resultAll);
        $this->assertNotEmpty($resultByAgeTotal);
        $this->assertNotEmpty($resultByAgeMen);
        $this->assertNotEmpty($resultByAgeWomen);
        $this->assertNotEmpty($resultByGroupTotal);
        $this->assertNotEmpty($resultByGroupMen);
        $this->assertNotEmpty($resultByGroupWomen);
        $this->assertNotEmpty($resultByHomeTotal);
        $this->assertNotEmpty($resultByHomeMen);
        $this->assertNotEmpty($resultByHomeWomen);
        $this->assertNotEmpty($resultByPlaceTotal);
        $this->assertNotEmpty($resultByPlaceMen);
        $this->assertNotEmpty($resultByPlaceWomen);
        $this->assertNotEmpty($resultByAge);
    }
}
