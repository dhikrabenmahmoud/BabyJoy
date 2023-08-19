<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Utilities2Controller extends AbstractController
{
    #[Route('/utilities2', name: 'app_utilities2')]
    public function index(): Response
    {
        return $this->render('utilities2/utilities2.html.twig' );
    }
}
