<?php

use Doctrine\ORM\ORMSetup;
use Doctrine\ORM\EntityManager;

require_once __DIR__ . "/../vendor/autoload.php";
require_once __DIR__ . "/config.php";

$isDevMode = true;
$config = ORMSetup::createAnnotationMetadataConfiguration(array(__DIR__), $isDevMode, null, null, false);

$conn = array(
    "driver"   => "pdo_mysql",
    "host"     => CONEXAO_HOST,
    "port"     => CONEXAO_PORTA,
    "user"     => CONEXAO_USUARIO,
    "password" => CONEXAO_SENHA,
    "dbname"   => CONEXAO_BASE
);

$entityManager = EntityManager::create($conn, $config);