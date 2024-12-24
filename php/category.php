<?php
include './config.php';

// get query params
try {
    if(! isset($_GET['operation'])) {
        throw new Exception('The "operation" parameter is required');
    }

    $operation = strtolower($_GET['operation']);

} catch(Exception $e) {
    http_response_code(400);
    header('Content-Type: application/json');
    echo json_encode(['error' => $e->getMessage()]);
}

// foreach function, make sure all parameters exist and call the function
switch($operation){
    case 'fetch-all':
        $result = fetchAll($conn);

        header('Content-Type: application/json');
        echo json_encode($result);
    break;
}

function fetchAll(mysqli $conn): array {
    $query = 'select * from categories';
    $result = mysqli_query($conn, $query);

    $data = [];
    while($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    
    return $data;
}