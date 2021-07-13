<?php

class LoginValidation
{
    public function validationUsername(string $username): ?string
    {
        if(empty($username)){
            return "Please enter username.";
        }

        return null;
    }

    public function validationPassword(string $password): ?string
    {
        if(empty($password)){
            return "Please enter your password.";
        }

        return null;
    }

    public function validationRegUsername(string $username): ?string
    {
        if (empty($username)){
            return "Please enter username.";
        } elseif (!preg_match('/^[a-zA-Z0-9_]+$/', $username)){
            return "Username can only contain letters, numbers, and underscores.";
        } elseif (strlen($username) < 3) {
            return "Username must be at least 3 characters";
        }

        return null;
    }

    public function validationRegPassword(string $password): ?string
    {
        if (empty($password)){
            return "Please enter your password.";
        } elseif (strlen($password) < 3) {
            return "Password must be at least 3 characters";
        }

        return null;
    }

    public function validationRegConfirmPassword(string $confirm_password, string $password): ?string
    {
        if (empty($confirm_password)){
            return "Please enter your password.";
        } elseif ($password !== $confirm_password) {
            return "Password does not match.";
        }

        return null;
    }
}
