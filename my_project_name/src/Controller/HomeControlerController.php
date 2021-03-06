<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeControlerController extends AbstractController
{
    /**
     * @Route("/", name="home_controler")
     */
    public function index(): Response
    {
        return $this->render('home_controler/index.html.twig', [
            'controller_name' => 'HomeControlerController',
        ]);
    }
}
