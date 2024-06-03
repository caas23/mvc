<?php

namespace Caas23\Project;

use Caas23\Entity\DeceasedGeneral;
use Caas23\Project\DeceasedGeneralFunctions;
use Caas23\Repository\DeceasedGeneralRepository;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

/**
 * Test cases for class DeceasedGeneraFunctions.
 */
class DeceasedGeneralFunctionsTest extends KernelTestCase
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
        $func = new DeceasedGeneralFunctions();

        $entityManager = $this->doctrine->getManager();
        $entityManager->createQuery('DELETE FROM Caas23\Entity\DeceasedGeneral')->execute();

        $entity = new DeceasedGeneral();
        $func->add($entity);

        $entityManager->persist($entity);
        $entityManager->flush();

        $resultAll = $func->getAll(array($entity));
        $resultTotal = $func->getTotal(array($entity));
        $resultMen = $func->getMen(array($entity));
        $resultWomen = $func->getWomen(array($entity));

        $this->assertNotEmpty($resultAll);
        $this->assertNotEmpty($resultTotal);
        $this->assertNotEmpty($resultMen);
        $this->assertNotEmpty($resultWomen);
    }
}
