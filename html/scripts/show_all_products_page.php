<?
require_once "../bootstrap.php";
use Doctrine\ORM\EntityManager;


echo "
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>show_all_products</title>
    <link rel=\"stylesheet\" href=\"../css/main.css\">
</head>
<body>
<div class=\"wrapper\">
";

$getProducts = new GetProducts($entityManager);
echo $getProducts->showAll();
echo "</div></body></html>";