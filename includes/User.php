<?php 
declare(strict_types=1);

require_once 'dbh.inc.php';
require_once 'login.config_session.inc.php';

class User {
    
    protected $id;
    protected $username;
    protected $email;

    
    public function __findByEmail($pdo, $email = "none") {
        if ($email) {
            return true;
        } else {
            return false;
        }
    }

    public function __findById($pdo, $id = "none") {
        if ($id) {
            return true;
        } else {
            return false;
        }
    }


} 
