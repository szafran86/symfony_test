<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Repository\CustomerRepository;

class FrontendController extends AbstractController
{
    /**
     * @Route("/", name="frontend")
     */
    public function index(CustomerRepository $customerRepository): Response
    {
        return $this->render('frontend/index.html.twig', [
            'controller_name' => 'FrontendController',
            'customers' => $customerRepository->findAll(),
        ]);
    }
}
