<?php

namespace App\Repository;

use App\Entity\Prestation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Prestation>
 */
class PrestationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Prestation::class);
    }

    /**
     * @return Prestation[] Prestations dont types_local contient le type donné
     */
    public function findByTypeLocal(string $typeLocal): array
    {
        return $this->createQueryBuilder('p')
            ->where('p.types_local LIKE :type')
            ->setParameter('type', '%"' . $typeLocal . '"%')
            ->orderBy('p.libelle', 'ASC')
            ->getQuery()
            ->getResult();
    }
}
