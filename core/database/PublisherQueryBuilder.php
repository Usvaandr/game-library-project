<?php

class PublisherQueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAllPublishers()
    {
        $statement = $this->pdo->prepare("select * from publishers"); // parameters instead of {$table}
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insertPublisher($parameters)
    {
        $sql = 'insert into publishers (name, value, country, founded) 
                values (:name, :value, :country, :founded);';
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters); //not clear why we use $parameters in this line
        } catch (Exception $e) {
            die($e->getMessage()); //for local development we could print mysql error message here - $e->getMessage()
        }
    }

    public function deletePublisher($publisherID)
    {
        try {
            $statement = $this->pdo->prepare("delete from publishers where id = {$publisherID};"); // parameters instead of {$table}
            return $statement->execute();
        } catch (Exception $e) {
            die("Game Publisher has games in his library. Delete them first."); //for local development we could print mysql error message here - $e->getMessage()
        }
    }
}
