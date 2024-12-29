<?php
declare(strict_types=1);

use Services\AuthService;

return function (string $pattern, mysqli $conn) {

    switch ($pattern) {
        case '/':
            require VIEWS_PATH . '/home.php';
        break;
        case '/products':
            $productId = $_GET['id'] ?? null;
    
            // if id is provided render the single product page
            if($productId) {
                $productId = (int) $productId;
                require VIEWS_PATH . '/product_details.html';
            } else {
                require VIEWS_PATH . '/products.php';
            }
        break;
        case '/membership':
            require VIEWS_PATH . '/membership.php';
        break;
        case '/register':
            // TODO: prevent logged in users from accessing this route

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
                require VIEWS_PATH . '/register.html';
            }
        break;
        case '/login':
            // TODO: prevent logged in users from accessing this route
            if($_SERVER['REQUEST_METHOD'] === 'POST') {
                $authService = new AuthService($conn);

                try {
                    $errors = $authService->login($_POST);

                    if(sizeof($errors) > 0) {
                        echo("<script>alert('login failed')</script>");
                        error_log("validation Errors:" . print_r($errors, true));
                    }else{
                        session_regenerate_id();
                        
                        // TODO: get id and save it in session
                        $_SESSION['user_email'] = $_POST['email'];
                        header('Location: /', true, 302);
                    }
                } catch(Exception $e) {
                    header('Location: /error', true, 302);
                }

            }
            require VIEWS_PATH . '/login.html';
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
            require VIEWS_PATH . '/error.html';
        break;
        case '404':
            require VIEWS_PATH . '/404.html';
        break;
        default:
            http_response_code(404);
            require VIEWS_PATH . '/404.html';
        break;
    }
};