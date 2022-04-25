<?
header('Content-Type: application/json; charset=utf-8');
require_once "../bootstrap.php";
$productsData = [];
$productRepository = $entityManager->getRepository('Product');
$products = $productRepository->findAll();

if ($products === null) {
    echo "No products found.\n";
    exit(1);
} else {
    foreach ($products as $product) {
        $productData['id'] = $product->getId();
        $productData['name'] = $product->getName();
        $productData['model'] = $product->getModel();
        $productsData[][] = $productData;
    }
}

echo json_encode($productsData);