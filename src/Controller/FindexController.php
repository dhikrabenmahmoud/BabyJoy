<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FindexController extends AbstractController
{
    #[Route('/findex', name: 'app_findex')]
    public function index(): Response
    {
        return $this->render('findex/findex.html.twig' );
    }
}
