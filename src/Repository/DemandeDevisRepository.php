<?php

namespace App\Repository;

use App\Entity\DemandeDevis;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DemandeDevis>
 */
class DemandeDevisRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DemandeDevis::class);
    }

    /**
     * Recherche des devis avec filtres et pagination
     * 
     * @param array $filters Filtres disponibles: date_debut, date_fin, email, statut
     * @param int $page Numéro de page (commence à 1)
     * @param int $limit Nombre d'éléments par page
     * @return DemandeDevis[]
     */
    public function findWithFilters(array $filters = [], int $page = 1, int $limit = 20): array
    {
        $qb = $this->createQueryBuilder('d')
            ->leftJoin('d.client', 'c')
            ->leftJoin('d.local', 'l')
            ->addSelect('c', 'l')
            ->orderBy('d.date_creation', 'DESC')
            ->addOrderBy('d.id', 'DESC');

        // Filtre par date de début
        if (!empty($filters['date_debut'])) {
            $qb->andWhere('d.date_demande >= :date_debut')
               ->setParameter('date_debut', $filters['date_debut']);
        }

        // Filtre par date de fin
        if (!empty($filters['date_fin'])) {
            $qb->andWhere('d.date_demande <= :date_fin')
               ->setParameter('date_fin', $filters['date_fin']);
        }

        // Filtre par email client
        if (!empty($filters['email'])) {
            $qb->andWhere('c.email LIKE :email')
               ->setParameter('email', '%' . $filters['email'] . '%');
        }

        // Filtre par statut
        if (!empty($filters['statut']) && $filters['statut'] !== 'tous') {
            $qb->andWhere('d.statut = :statut')
               ->setParameter('statut', $filters['statut']);
        }

        // Pagination
        $offset = ($page - 1) * $limit;
        $qb->setFirstResult($offset)
           ->setMaxResults($limit);

        return $qb->getQuery()->getResult();
    }

    /**
     * Compte le nombre total de devis avec les filtres appliqués
     * 
     * @param array $filters Filtres disponibles: date_debut, date_fin, email, statut
     * @return int
     */
    public function countWithFilters(array $filters = []): int
    {
        $qb = $this->createQueryBuilder('d')
            ->select('COUNT(d.id)')
            ->leftJoin('d.client', 'c');

        // Filtre par date de début
        if (!empty($filters['date_debut'])) {
            $qb->andWhere('d.date_demande >= :date_debut')
               ->setParameter('date_debut', $filters['date_debut']);
        }

        // Filtre par date de fin
        if (!empty($filters['date_fin'])) {
            $qb->andWhere('d.date_demande <= :date_fin')
               ->setParameter('date_fin', $filters['date_fin']);
        }

        // Filtre par email client
        if (!empty($filters['email'])) {
            $qb->andWhere('c.email LIKE :email')
               ->setParameter('email', '%' . $filters['email'] . '%');
        }

        // Filtre par statut
        if (!empty($filters['statut']) && $filters['statut'] !== 'tous') {
            $qb->andWhere('d.statut = :statut')
               ->setParameter('statut', $filters['statut']);
        }

        return (int) $qb->getQuery()->getSingleScalarResult();
    }

    /**
     * Récupère les derniers devis pour le dashboard
     * 
     * @param int $limit
     * @return DemandeDevis[]
     */
    public function findLatestForDashboard(int $limit = 5): array
    {
        return $this->createQueryBuilder('d')
            ->leftJoin('d.client', 'c')
            ->leftJoin('d.local', 'l')
            ->addSelect('c', 'l')
            ->orderBy('d.date_creation', 'DESC')
            ->addOrderBy('d.id', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }
}
