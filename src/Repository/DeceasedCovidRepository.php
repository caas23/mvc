<?php

namespace Caas23\Repository;

use Caas23\Entity\DeceasedCovid;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DeceasedCovid>
 */
class DeceasedCovidRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DeceasedCovid::class);
    }
}
