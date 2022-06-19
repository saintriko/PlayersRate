<head>
    <title>Players Rate Test</title>
    <link rel="stylesheet" href="../css/main.css">
</head>

<?php
// create_product.php <name>
require_once "../bootstrap.php";

?>
    <div class="wrapper">
        <form action="create_product_page.php" method="get">
            Product Name: <input type="text" name="name" value="TestProduct"><br>
            Product Model: <input type="text" name="model" value="mk2"><br>
            <input type="submit">
        </form>
    </div>
<?

if (!empty($_GET) && !empty($_GET['name']) && !empty($_GET['model']) ) {
    $newProductName = $_GET['name'];
    $newProductModel = $_GET['model'];

    $product = new Product();
    $product->setName($newProductName);
    $product->setModel($newProductModel);

    $entityManager->persist($product);
    $entityManager->flush();

    echo '<div class="wrapper">';
    echo nl2br("Created Product with ID: " . $product->getId() . "\n" . $product->getName() . "\n" . $product->getModel() . "\n" );
    echo '</div>';
} else {
    echo '<div class="wrapper">';
    echo "Please, enter product name, product model";
    echo '</div>';
}