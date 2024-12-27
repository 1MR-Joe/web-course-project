<?php
declare(strict_types=1);

// TODO: configure session parameters
// start a new session a resume existing session
session_start();
if(! isset($_SESSION['started'])) {
    $_SESSION['started'] = new DateTime();
}

// TODO: load environment variables and use them
// DB connection
$conn = mysqli_connect('localhost', 'root', 'admin', 'gym_database');

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
            $errors = require './php/register.php';

            if(sizeof($errors) > 0) {
                echo("<script>alert('registration failed')</script>");
                // TODO: attach errors in session
                // TODO: save registration data in session
            } else {
                // save user credentials in session
                session_regenerate_id();
                // TODO: get id and save it in session
                $_SESSION['user_email'] = $_POST['email'];
                header(header: 'Location: /', response_code: 302);
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
    case '/api':
        // TODO: remove " /api " from the request string and process the rest of it also using switch case
    break;
    case '/session':
        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";
    break;
    default:
        // TODO: make a 404 page
        http_response_code(404);
        echo "404 Not Found";
    break;
}

session_write_close();