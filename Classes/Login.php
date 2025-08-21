<?php 

class Login extends Dbh{
    private $username;
    private $pwd;

    public function __construct($username, $pwd) {
        $this->username = $username;
        $this->pwd = $pwd;
    }

    private function insertUser() {
        $query = "INSERT INTO users ('username', 'pwd') VALUES (:username. :pwd);";
        
        $stmt = parent::connect()->prepare($query);
        $stmt->bindParam(":username", $this->username);
        $stmt->bindParam(":pwd", $this->pwd);

        $stmt->execute();
    }

    private function isSubmitEmpty() {
        if(isset($this->username) && isset($this->pwd)) {
            return false;
        } else {
            return true;
        }
    }


    public function loginUser() {
        // Error Handlers

        if ($this->isSubmitEmpty) {
            header("Location: " . $_SERVER['DOCUMENT_ROOT'] . '/index.php');
            die();
        }

        // If no errors
        $this->insertUser();
        
    }

}

