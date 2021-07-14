<?php

class LoginCheck
{
    public function isLoggedin(): void
    {
        session_start();
        if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
            header("location: /login");
            exit;
        }
    }

    public function isNotLoggedin(): void
    {
        session_start();
        if (isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == true) {
            header("location: /");
            exit;
        }
    }
}
