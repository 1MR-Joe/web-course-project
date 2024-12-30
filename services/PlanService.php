<?php
declare(strict_types=1);

namespace Services;

use mysqli;

class PlanService {
    public function __construct(
        private readonly mysqli $conn,
    ) {
    }

    public function fetchAll(): array {
        $query = "SELECT * FROM plans";
        $result = mysqli_query($this->conn, $query);

        if(! $result) {
            error_log("Database query failed: " . mysqli_error($this->conn));
            return[];
        }
        $plans = [];
        while($row = mysqli_fetch_assoc($result)){
            $plans[] = $row;
        }

        return $plans;

    }

}    