<?php
declare(strict_types=1);

require 'vendor/autoload.php';

use Doctrine\ORM\EntityManager;
use Doctrine\Migrations\Configuration\EntityManager\ExistingEntityManager;
use Doctrine\Migrations\DependencyFactory;
use Doctrine\Migrations\Configuration\Migration\PhpFile;
use Psr\Container\ContainerInterface;

// migrations config file
$config = new PhpFile('migrations.php'); // Or use one of the Doctrine\Migrations\Configuration\Configuration\* loaders

// import the DI container and get the EntityManager from it
/** @var ContainerInterface $container */
$container = require __DIR__ . '/bootstrap.php';
$entityManager = $container->get(EntityManager::class);

// use the pre-configured EntityManager to run this cli app
return DependencyFactory::fromEntityManager($config, new ExistingEntityManager($entityManager));