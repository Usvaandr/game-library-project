<?php

$username = trim($_POST["username"]);
$password = trim($_POST["password"]);

$selectedUser = $loginQueryBuilder->selectUser($username);

$username_err = $loginValidator->validationUsername($username);
$password_err = $loginValidator->validationPassword($password);

if (!isset($username_err) & !isset($password_err)) {
    if ($selectedUser->password == $password) {
        session_start();

        $_SESSION["loggedin"] = true;
        $_SESSION["id"] = $selectedUser->id;
        $_SESSION["username"] = $selectedUser->username;

        header("location: /");
    } else {
        $login_err = "Invalid username or password.";
        require "controllers/login.php";
    }
} else {
    require "controllers/login.php";
}
