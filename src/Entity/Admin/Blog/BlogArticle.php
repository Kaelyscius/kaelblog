<?php

namespace App\Entity\Admin\Blog;

use App\Repository\Admin\Blog\BlogArticleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BlogArticleRepository::class)
 */
class BlogArticle extends AbstractArticle
{
}
