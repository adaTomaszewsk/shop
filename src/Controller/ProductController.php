<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController {

    #[Route('/', name:'products')]
    public function index(ProductRepository $productRepository) : Response
    {
        $products = $productRepository->findAll();
        return $this->render('products/index.html.twig', [
            'products' => $products,
            ]
        );
    }
}