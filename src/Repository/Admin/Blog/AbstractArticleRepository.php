<?php

namespace App\Repository\Admin\Blog;

use App\Entity\Admin\Blog\AbstractArticle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AbstractArticle|null find($id, $lockMode = null, $lockVersion = null)
 * @method AbstractArticle|null findOneBy(array $criteria, array $orderBy = null)
 * @method AbstractArticle[]    findAll()
 * @method AbstractArticle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AbstractArticleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AbstractArticle::class);
    }

    // /**
    //  * @return AbstractArticle[] Returns an array of AbstractArticle objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AbstractArticle
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
