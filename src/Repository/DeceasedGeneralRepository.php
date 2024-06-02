<?php

namespace Caas23\Repository;

use Caas23\Entity\DeceasedGeneral;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DeceasedGeneral>
 */
class DeceasedGeneralRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DeceasedGeneral::class);
    }
}
