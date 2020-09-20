<?php

namespace App\Repository\Admin\Blog;

use App\Entity\Admin\Blog\ReviewArticle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ReviewArticle|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReviewArticle|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReviewArticle[]    findAll()
 * @method ReviewArticle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReviewArticleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReviewArticle::class);
    }

    // /**
    //  * @return ReviewArcticle[] Returns an array of ReviewArcticle objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ReviewArcticle
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
