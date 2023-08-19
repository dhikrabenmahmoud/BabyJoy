<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ErreurController extends AbstractController
{
    #[Route('/erreur', name: 'app_erreur')]
    public function index(): Response
    {
        return $this->render('erreur/erreur.html.twig' 
        );
    }
}
