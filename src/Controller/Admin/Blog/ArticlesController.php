<?php

namespace App\Controller\Admin\Blog;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticlesController extends AbstractController
{
    /**
     * @Route("/admin/blog/articles", name="admin_blog_articles")
     */
    public function index(): Response
    {
        return $this->render('admin/blog/articles/index.html.twig', [
            'controller_name' => 'ArticlesController',
        ]);
    }
}
