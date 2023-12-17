<?php

namespace App\Repository;

use App\Entity\CreatureLootTable;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CreatureLootTable>
 *
 * @method CreatureLootTable|null find($id, $lockMode = null, $lockVersion = null)
 * @method CreatureLootTable|null findOneBy(array $criteria, array $orderBy = null)
 * @method CreatureLootTable[]    findAll()
 * @method CreatureLootTable[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CreatureLootTableRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CreatureLootTable::class);
    }

//    /**
//     * @return CreatureLootTable[] Returns an array of CreatureLootTable objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?CreatureLootTable
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
