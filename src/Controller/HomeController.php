<?php

namespace App\Controller;

use App\Repository\BookRepository;
use App\Repository\ReviewRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(BookRepository $bookRepository, ReviewRepository $reviewRepository)
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'books' => $bookRepository->findAll(),
            'reviews' => $reviewRepository->findAll(),
        ]);
    }
}
