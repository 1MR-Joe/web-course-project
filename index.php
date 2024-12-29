<?php
declare(strict_types=1);

// auto loading
require __DIR__ . '/vendor/autoload.php';

use Dotenv\Dotenv;

// TODO: configure session parameters
// start a new session a resume existing session
session_start();
if(! isset($_SESSION['started'])) {
    $_SESSION['started'] = new DateTime();
}

// load environment variables and use them
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// DB connection
try {
    $conn = mysqli_connect($_ENV['DB_HOST'], $_ENV['DB_USER'], $_ENV['DB_PASS'], $_ENV['DB_NAME']);
} catch (Exception $e) {
    header('Location: /error', true, 302);
}

// TODO: load path_constants
require __DIR__ . '/configs/path_constants.php';

// Routing // TODO: Exception handling
$routes = require CONFIGS_PATH . '/routes.php';
$api = require CONFIGS_PATH . '/api.php';

// parse url without origin (domain) and remove query params
$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
// echo $request;

if ((strpos($request, '/api')) !== false) {
    // api request
    $request = str_replace('/api', '', $request);
    echo $api($request, $conn);
} else {
    $routes($request, $conn);
}


session_write_close();