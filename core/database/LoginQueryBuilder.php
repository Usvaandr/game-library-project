<?php

class LoginQueryBuilder
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function insertUser(array $parameters): void
    {
        try {
            $statement = $this->pdo->prepare("
                INSERT INTO users (username, password) 
                VALUES (:username, :password);  
            ");
            $statement->execute($parameters);
        } catch (Exception $e) {
            die("Invalid name.");
        }
    }

    public function selectUser(string $username): ?object
    {
        try {
            $statement = $this->pdo->prepare("
                SELECT id, username, password 
                FROM users 
                WHERE username = '{$username}'
                ");
            $statement->execute();

            return $statement->fetchAll(PDO::FETCH_CLASS)[0];
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
