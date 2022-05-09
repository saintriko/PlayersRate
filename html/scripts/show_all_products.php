<?php
require_once "../bootstrap.php";
use Doctrine\ORM\EntityManager;

$getProducts = new GetProducts($entityManager);
echo $getProducts->showAll();