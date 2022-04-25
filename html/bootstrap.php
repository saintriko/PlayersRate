<?php
// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__ ."/src/entities"), $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);
// or if you prefer yaml or XML
//$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);
//$config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);

// database configuration parameters
$conn = array(
    'dbname' => $_ENV['DATABASE_NAME'],
    'user' => $_ENV['DATABASE_USER'],
    'password' => $_ENV['DATABASE_PASSWORD'],
    'host' => $_ENV['DATABASE_HOST'],
    'driver' => $_ENV['DATABASE_DRIVER'],
);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);