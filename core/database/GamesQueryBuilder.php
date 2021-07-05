<?php

class GamesQueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAllGames($publisherID)
    {
        $statement = $this->pdo->prepare("SELECT * FROM games WHERE publisherID = {$publisherID};");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectThisGame($id)
    {
        $statement = $this->pdo->prepare("SELECT * FROM games WHERE id = {$id}");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS)[0];
    }

    public function selectPublisherName($publisherID)
    {
        $statement = $this->pdo->prepare("SELECT name FROM publishers WHERE id = {$publisherID};");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_OBJ)[0]->name;
    }

    public function insertGame($parameters)
    {
        $sql = 'INSERT INTO games (name, year, publisherID) 
                VALUES (:name, :year, :publisherID);';
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function deleteGame($gameID)
    {
        try {
            $statement = $this->pdo->prepare("DELETE FROM games WHERE id = {$gameID};"); // parameters instead of {$table}

            return $statement->execute();
        } catch (Exception $e) {
            die($e->getMessage()); //for local development we could print mysql error message here - $e->getMessage()
        }
    }
    public function updateGame($gameID, $parameters)
    {
        try {
            $statement = $this->pdo->prepare("
        UPDATE games 
        SET name = :name, year = :year, publisherID = :publisher
        WHERE id = {$gameID};");
            $statement->execute($parameters);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
