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
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
}
