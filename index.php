<?php
declare(strict_types=1);

// auto loading
require __DIR__ . '/vendor/autoload.php';

use Dotenv\Dotenv;
use Services\AuthService;

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

// Routing // TODO: Exception handling
// parse url without origin (domain) and remove query params
$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// echo $request;

switch ($request) {
    case '/':
        require './views/home.php';
    break;
    case '/products':
        $productId = $_GET['id'];

        // if id is provided render the single product page
        if($productId) {
            $productId = (int) $productId;
            require './views/product_details.html';
        } else {
            require './views/products.php';
        }
    break;
    case '/membership':
        require './views/membership.php';
    break;
    case '/register':
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $authService = new AuthService($conn);

            try {
                $errors = $authService->register($_POST);

                if(sizeof($errors) > 0) {
                    echo("<script>alert('registration failed')</script>");
                    error_log("validation Errors:" . print_r($errors, true));
                    
                    // TODO: attach errors in session
                    // TODO: save registration data in session (except password and confirmation)
                    // TODO: show errors in front end

                } else {
                    // save user credentials in session
                    session_regenerate_id();
                    
                    // TODO: get id and save it in session
                    $_SESSION['user_email'] = $_POST['email'];
                    header('Location: /', true, 302);
                }
    
            } catch(Exception $e) {
                header('Location: /error', true, 302);
            }
        } else {
            require './views/register.html';
        }
    break;
    case '/login':
        require './views/login.html';
    break;
    case '/logout':
        session_unset();
        session_destroy();
        header('Location: /');
    break;
    case '/session':
        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";
    break;
    case '/error':
        require './views/error.html';
    break;
    case '/api':
        // TODO: remove " /api " from the request string and process the rest of it also using switch case
    break;
    default:
        // TODO: make a 404 page
        http_response_code(404);
        echo "404 Not Found";
    break;
}

session_write_close();