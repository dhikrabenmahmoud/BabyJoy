<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Utilities3Controller extends AbstractController
{
    #[Route('/utilities3', name: 'app_utilities3')]
    public function index(): Response
    {
        return $this->render('utilities3/utilities3.html.twig' );
    }
}
