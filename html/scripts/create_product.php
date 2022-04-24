<?php
// create_product.php <name>
require_once "../bootstrap.php";

if ($argc >= 3 && isset($argv[1]) && isset($argv[2])) {
    $newProductName = $argv[1];
    $newProductModel = $argv[2];

    $product = new Product();
    $product->setName($newProductName);
    $product->setModel($newProductModel);

    $entityManager->persist($product);
    $entityManager->flush();

    echo "Created Product with ID " . $product->getId() . "\n";
} else {
    echo "Error. Please enter: create_product [name] [model]";
}