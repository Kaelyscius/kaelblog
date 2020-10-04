<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class DefaultController.
 */
class DefaultController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage(): Response
    {
        return $this->render('index/index.html.twig', []);
    }
}
