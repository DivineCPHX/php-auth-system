<?php 
declare(strict_types=1);

function output_all_user_details() {

    $result = get_user($pdo, $username);

    if (isset($_SESSION["user_id"])) {
        
    }
}