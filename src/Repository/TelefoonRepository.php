<?php

namespace App\Repository;

use App\Entity\Telefoon;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Telefoon|null find($id, $lockMode = null, $lockVersion = null)
 * @method Telefoon|null findOneBy(array $criteria, array $orderBy = null)
 * @method Telefoon[]    findAll()
 * @method Telefoon[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TelefoonRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Telefoon::class);
    }

    // /**
    //  * @return TelefoonFixtures[] Returns an array of TelefoonFixtures objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TelefoonFixtures
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
