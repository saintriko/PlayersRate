<?
header('Content-Type: application/json; charset=utf-8');
require_once "../bootstrap.php";

$productsData = [];
$productRepository = $entityManager->getRepository('Product');
$products = $productRepository->findAll();

if ($products === null) {
    echo json_encode([null, "No product found."]);
    exit(1);
} else {
    echo json_encode($products);
}
