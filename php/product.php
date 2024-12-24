<?php
include './config.php';

// example routes
// localhost/product.php?operation=fetch-all
// localhost/product.php?operation=fetchByEmail&email=e@example.com
// request query params are separated by &

// get query params
try {
    if(! isset($_GET['operation'])) {
        throw new Exception('The "operation" parameter is required');
    }

    $operation = strtolower($_GET['operation']);
    
    $queryParams = [
        'category' => $_GET['category'] || null,
        'orderBy' => strtolower($_GET['orderBy']) || null,
        'orderDir' => strtolower($_GET['orderDir']) || null
    ];

} catch(Exception $e) {
    http_response_code(400);
    header('Content-Type: application/json');
    echo json_encode(['error' => $e->getMessage()]);
}

// foreach function, make sure all parameters exist and call the function
switch($operation){
    case 'fetch-all':
        $result = fetchAll($conn, $queryParams);

        header('Content-Type: application/json');
        echo json_encode($result);
    break;
}

function fetchAll(mysqli $conn, array $queryParams): array {
    $query = 'select * from products';

    // TODO: error here
    // if(! is_null($queryParams['category'])) {
    //     $query = $query . ' ' . 'where product.category = ' . $queryParams['category'];
    // }

    $result = mysqli_query($conn, $query);

    $data = [];
    while($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    
    return $data;
}