<?php

namespace Caas23\Project;

use Caas23\Entity\EnergyPetro;
use Caas23\Project\EnergyPetroFunctions;
use Caas23\Repository\EnergyPetroRepository;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

/**
 * Test cases for class EnergyPetroFunctions.
 */
class EnergyPetroFunctionsTest extends KernelTestCase
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
        $func = new EnergyPetroFunctions();

        $entityManager = $this->doctrine->getManager();
        $entityManager->createQuery('DELETE FROM Caas23\Entity\EnergyPetro')->execute();

        $entity = new EnergyPetro();
        $func->add($entity);

        $entityManager->persist($entity);
        $entityManager->flush();

        $result87 = $func->get87(array($entity));
        $result92 = $func->get92(array($entity));
        $result97 = $func->get97(array($entity));
        $result02 = $func->get02(array($entity));
        $result07 = $func->get07(array($entity));
        $result12 = $func->get12(array($entity));
        $result17 = $func->get17(array($entity));
        $result22 = $func->get22(array($entity));
        $resultAll = $func->getAll(array($entity));
        $this->assertNotEmpty($result87);
        $this->assertNotEmpty($result92);
        $this->assertNotEmpty($result97);
        $this->assertNotEmpty($result02);
        $this->assertNotEmpty($result07);
        $this->assertNotEmpty($result12);
        $this->assertNotEmpty($result17);
        $this->assertNotEmpty($result22);
        $this->assertNotEmpty($resultAll);
    }
}
