<?php
    require_once 'lib/validator.php';

    if (!empty($_REQUEST)) {
        $username = $_REQUEST['username'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $cfm_psw = $_REQUEST['confirm_psw'];

        echo '<pre>';
        print_r($_REQUEST);
        echo '</pre>';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post"></form>
    <label for="user-name">Username</label>
    <input type="text" name="username" id="user-name">
    <label for="user-email">Email</label>
    <input type="email" name="email" id="user-email">
    <label for="user-password">Password</label>
    <input type="password" name="password" id="user-password">
    <label for="user-confirm">Confirm Password</label>
    <input type="password" name="confirm_psw" id="user-confirm">
    <input type="submit" value="Log in">
</body>
</html>