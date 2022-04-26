<?
header('Content-Type: application/json; charset=utf-8');
require_once "../bootstrap.php";

if (isset($_GET['pid'])) {
    $id = $_GET['pid'];
    $product = $entityManager->find('Product', $id);

    if ($product === null) {
        echo json_encode([null, "No product found. Use GET parameter. Example: ?pid=1"]);
        exit(1);
    }

    echo json_encode($product);
} else {
    echo json_encode([null, "Use GET parameter. Example: ?pid=1"]);
}