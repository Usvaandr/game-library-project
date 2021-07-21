<?php

class GamesQueryBuilder
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAllGames(int $publisherID): array
    {
        $statement = $this->pdo->prepare("SELECT * FROM games WHERE publisherID = {$publisherID};");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectThisGame(int $id): object
    {
        $statement = $this->pdo->prepare("SELECT * FROM games WHERE id = {$id}");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS)[0];
    }

    public function selectPublisherName(int $publisherID): string
    {
        $statement = $this->pdo->prepare("SELECT name FROM publishers WHERE id = {$publisherID};");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_OBJ)[0]->name;
    }

    public function insertGame(array $parameters): void
    {
        $sql = 'INSERT INTO games (name, year, publisherID) 
                VALUES (:name, :year, :publisherID);';
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function deleteGame(int $gameID): void
    {
        try {
            $statement = $this->pdo->prepare("DELETE FROM games WHERE id = {$gameID};");
            $statement->execute();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function updateGame(int $gameID, array $parameters): void
    {
        try {
            $statement = $this->pdo->prepare("
                UPDATE games 
                SET name = :name, year = :year, publisherID = :publisher
                WHERE id = {$gameID};");
            $statement->execute($parameters);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
