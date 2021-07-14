<?php

class GamesQueryBuilder extends QueryBuilder
{
    public function selectAllGames(int $publisherID): array
    {
        $statement = $this->pdo->prepare("SELECT * FROM games WHERE publisherID = {$publisherID};");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insertGame(array $parameters): void
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

    public function deleteGame(int $gameID): void
    {
        try {
            $statement = $this->pdo->prepare("DELETE FROM games WHERE id = {$gameID};");
            $statement->execute();
        } catch (Exception $e) {
            die($e->getMessage());
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
            die($e->getMessage());
        }
    }
}
