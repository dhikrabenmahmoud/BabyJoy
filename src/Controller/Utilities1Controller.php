<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Utilities1Controller extends AbstractController
{
    #[Route('/utilities1', name: 'app_utilities1')]
    public function index(): Response
    {
        return $this->render('utilities1/utilities1.html.twig' );
    }
}
