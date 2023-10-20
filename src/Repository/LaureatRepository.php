<?php

namespace App\Repository;

use App\Entity\Laureat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Laureat>
 *
 * @method Laureat|null find($id, $lockMode = null, $lockVersion = null)
 * @method Laureat|null findOneBy(array $criteria, array $orderBy = null)
 * @method Laureat[]    findAll()
 * @method Laureat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LaureatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Laureat::class);
    }

    public function add(Laureat $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Laureat $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
    public function orderByLastname()
    {
        $results = $this->createQueryBuilder('l')
        ->orderBy('l.lastname', 'ASC')
        ->getQuery()
        ->getResult();

        return $results;

    }
//    /**
//     * @return Laureat[] Returns an array of Laureat objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('l.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Laureat
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
