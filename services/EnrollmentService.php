<?php
declare(strict_types=1);

namespace Services;

use LDAP\Result;
use mysqli;

class EnrollmentService {
    public function __construct(
        private readonly mysqli $conn,
    ){        
    }
  
    public function fetchByUserId(int $userid): array {
    $userid=(int)$_SESSION['user_id'];
    $query = "SELECT * FROM users where id=$userid";  
    $result = mysqli_query($this->conn, $query);

    if(!$result){
        error_log("Database query failed: " . mysqli_error($this->conn));
        return [];
    }

    $Enrollment = mysqli_fetch_assoc($result);
        return $Enrollment;

    }
    
}