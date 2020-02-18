<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ParfumController extends AbstractController
{
    /**
     * @Route("/parfum", name="parfum")
     */
    public function index()
    {
        return $this->render('parfum/index.html.twig', [
            'controller_name' => 'ParfumController',
        ]);
    }
}
