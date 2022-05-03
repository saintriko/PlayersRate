<?php
use Doctrine\ORM\EntityManager;
require_once "../bootstrap.php";

    $productRepository = $entityManager->getRepository('Product');
    $products = $productRepository->findAll();
    $productsData = "";
    if ($products === null) {
        $productsData = "No products found.\n";
    } else {
        foreach ($products as $product) {
            $productsData.= nl2br($product->getId() . ". " . $product->getName() . " " . $product->getModel() . "\n");
        }
    }
    echo $productsData;

