<?php

namespace App\Repository;

use App\Entity\ItemTypes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ItemTypes>
 *
 * @method ItemTypes|null find($id, $lockMode = null, $lockVersion = null)
 * @method ItemTypes|null findOneBy(array $criteria, array $orderBy = null)
 * @method ItemTypes[]    findAll()
 * @method ItemTypes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ItemTypesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ItemTypes::class);
    }
    public function findByIds(array $ids)
    {
        return $this->createQueryBuilder('it')
            ->where('it.id IN (:ids)')
            ->setParameter('ids', $ids)
            ->getQuery()
            ->getResult();
    }
//    /**
//     * @return ItemTypes[] Returns an array of ItemTypes objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('i.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ItemTypes
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
