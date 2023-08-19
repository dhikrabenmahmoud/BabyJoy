<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UtilitiesController extends AbstractController
{
    #[Route('/utilities', name: 'app_utilities')]
    public function index(): Response
    {
        return $this->render('utilities/utilities.html.twig' );
    }
}
