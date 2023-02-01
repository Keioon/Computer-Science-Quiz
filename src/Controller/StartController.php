<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class StartController extends AbstractController
{
    public function __construct(

    ){}

    /**
     * @Route("/")
     */
    public function renderStartPage(): Response
    {
        $params = [];
        return $this->render("front/mainPage.html.twig", $params);
    }
}