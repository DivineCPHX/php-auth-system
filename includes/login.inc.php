<? php 
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    try {
       require_once 'dbh.inc.php';
       require_once 'login_model.inc.php';
       require_once 'login_contr.inc.php';
        
        // ERROR HANDLERS
        $errors = [];
        if (is_input_empty($username, $pwd)) {
            $errors["empty_input"] = "Fill in all the fields!";
        } 

        if (is_email_invalid($email)) {
            $errors["empty_input"] = "Email is invalid!";
        }

        $result = get_user($pdo, $username);

        if (is_username_wrong($result)) {
            $errors["login_incorrect"] = "Incorrect login info!";
        } 

        if (!is_username_wrong($result) && is_pwd_wrong($pwd, $result["pwd"])) {
            $errors["login_incorrect"] = "Incorrect login info!";
        }        

        $newSessionId = session_create_id()


    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
    die();
}