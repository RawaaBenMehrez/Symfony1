<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ServiceController extends AbstractController
{
    #[Route('/service', name: 'app_service')]
    public function index(): Response
    {
        return new Response ( "<h1> Bonjour Les amis </h1>");
        return $this->render('service/index.html.twig', [ 'controller_name' => 'ServiceController',]);
      }
     #[Route('/showService/{name}', name:'app_showService')]

     public function showService($name)
     {
        return $this->render('service/showService.html.twig', ['n' => $name]);
      }
}
