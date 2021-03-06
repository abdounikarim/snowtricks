<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{
    /**
     * @Route("/", name="front")
     */
    public function index(CategoryRepository $categoryRepository)
    {

        return $this->render('front/index.html.twig', [
            'categories' => $categoryRepository->findAll(),
        ]);
    }
}
