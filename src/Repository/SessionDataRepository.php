<?php

namespace App\Repository;

use App\Entity\SessionData;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method SessionData|null find($id, $lockMode = null, $lockVersion = null)
 * @method SessionData|null findOneBy(array $criteria, array $orderBy = null)
 * @method SessionData[]    findAll()
 * @method SessionData[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SessionDataRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, SessionData::class);
    }

    // /**
    //  * @return SessionData[] Returns an array of SessionData objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SessionData
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
