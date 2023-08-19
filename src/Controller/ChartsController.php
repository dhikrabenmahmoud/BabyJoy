<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChartsController extends AbstractController
{
    #[Route('/charts', name: 'app_charts')]
    public function index(): Response
    {
        return $this->render('charts/charts.html.twig' );
    }
}
