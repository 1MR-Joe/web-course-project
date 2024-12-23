<?php

declare(strict_types=1);

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;
use Psr\Container\ContainerInterface;
use Slim\App;
use Slim\Factory\AppFactory;
use Slim\Views\Twig;

return [
    App::class => function (ContainerInterface $container) {

        // attach container to app
        AppFactory::setContainer($container);
        $app = AppFactory::create();

        // attach web routes
        $routes = require CONFIGS_PATH . '/routes/web.php';
        $routes($app);

        // attach api routes
        $api = require CONFIGS_PATH . '/routes/api.php';
        $api($app);

        // attach middlewares
        $middlewares = require CONFIGS_PATH . '/middlewares.php';
        $middlewares($app);

        return $app;
    },
    Twig::class => Twig::create(
        path: RESOURCES_PATH,
        settings: [
            // TODO: make auto_reload value imported from app config not fixed value
            'cache' => STORAGE_PATH . '/cache',
            'auto_reload' => true,
        ]
    ),
    EntityManager::class => function () {
        $connectionParams = [
            'driver' => $_ENV['DB_DRIVER'] ?? 'pdo_mysql',
            'host' => $_ENV['DB_HOST'] ?? 'localhost',
            'dbname' => $_ENV['DB_NAME'],
            'user' => $_ENV['DB_USER'],
            'password' => $_ENV['DB_PASS'],
        ];

        $conn = DriverManager::getConnection($connectionParams);

        $ormSetup = ORMSetup::createAttributeMetadataConfiguration(
            paths:  [ENTITIES_PATH],
            isDevMode: true
            // TODO: move configuration to app config
        );

        // TODO: add EventManager and event listeners if needed

        return new EntityManager($conn, $ormSetup);
    }
];