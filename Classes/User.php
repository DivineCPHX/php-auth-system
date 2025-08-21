<?php 
declare(strict_types=1);

class User {
    
    public $id;
    public $username;
    public $email;

    // public function __findByEmail($pdo, $email = "none") {
    //     if ($email) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }

    // public function __findById($pdo, $id = "none") {
    //     if ($id) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }

    public function findByEmail($email) {
        require_once 'includes/dbh.inc.php';
        require_once 'includes/login.config_session.inc.php';
        // require_once 'login.inc.php';
        return "email: " . $this->email;
    }

    public function findById($id) {
        require_once 'includes/dbh.inc.php';
        require_once 'includes/login.config_session.inc.php';
        // require_once 'login.inc.php'       
        return "id: " . $this->id;
    }

} 

echo $user01->findByEmail;
echo "<br>";
echo $user02->findById;