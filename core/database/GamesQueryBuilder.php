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
        $statement = $this->pdo->prepare("select * from games where publisherID = {$publisherID};");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectPublisherName($publisherID)
    {
        $statement = $this->pdo->prepare("select name from publishers where id = {$publisherID};");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ)[0]->name;
    }

    public function insertGame($parameters)
    {
        $sql = 'insert into games (name, year, publisherID) 
                values (:name, :year, :publisherID);';
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
            $statement = $this->pdo->prepare("delete from games where id = {$gameID};"); // parameters instead of {$table}
            return $statement->execute();
        } catch (Exception $e) {
            die($e->getMessage()); //for local development we could print mysql error message here - $e->getMessage()
        }
    }
}
