<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FeatureController extends AbstractController
{
    /**
     * @Route("/admin/feature", name="feature")
     */
    public function index(): Response
    {
        return $this->render('feature/index.html.twig', [
            'controller_name' => 'FeatureController',
        ]);
    }
}
