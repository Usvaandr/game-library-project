<?php

$username = trim($_POST["username"]);
$password = trim($_POST["password"]);
$confirm_password = trim($_POST["confirm_password"]);

$username_err = $loginValidator->validationRegUsername($username);
$password_err = $loginValidator->validationRegPassword($password);
$confirm_password_err = $loginValidator->validationRegConfirmPassword($confirm_password, $password);

if (!isset($username_err) & !isset($password_err) & !isset($confirm_password_err)) {
    $loginQueryBuilder->insertUser([
        'username' => $username,
        'password' => $password
    ]);
    header('Location: /login');
} else {
    require 'controllers/register.php';
}
