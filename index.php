<?php  
require_once 'includes/login.config_session.inc.php';
require_once 'includes/login_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="css/login.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Login</h3>

    <form class="login.form" action="includes/login.inc.php" method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="pwd" placeholder="Password" required>
        <input type="submit" value="Submit">
    </form>

    <?php
        check_login_errors();
    ?>
</body>
</html>