<?php

class PublisherQueryBuilder extends QueryBuilder
{
    public function selectAllPublishers(): array
    {
        $statement = $this->pdo->prepare("SELECT * FROM publishers");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectAllPublisherNames(): array
    {
        $statement = $this->pdo->prepare("SELECT name FROM publishers");
        $statement->execute();
        $array = $statement->fetchAll(PDO::FETCH_CLASS);

        return array_column($array, 'name');
    }

    public function insertPublisher(array $parameters): void
    {
        $sql = 'INSERT INTO publishers (name, value, country, founded) 
                VALUES (:name, :value, :country, :founded);';
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters); //not clear why we use $parameters in this line
        } catch (Exception $e) {
            die($e->getMessage()); //for local development we could print mysql error message here - $e->getMessage()
        }
    }

    public function deletePublisher(int $publisherID): void
    {
        try {
            $statement = $this->pdo->prepare("DELETE FROM publishers WHERE id = {$publisherID};"); // parameters instead of {$table}
            $statement->execute();
        } catch (Exception $e) {
            die("Game Publisher has games in his library. Delete them first."); //for local development we could print mysql error message here - $e->getMessage()
        }
    }

    public function deletePublisherAll(int $publisherID): void
    {
        try {
            $statement1 = $this->pdo->prepare("DELETE FROM games WHERE publisherID = {$publisherID};");
            $statement1->execute();

            $statement2 = $this->pdo->prepare("DELETE FROM publishers WHERE id = {$publisherID};");
            $statement2->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function updatePublisher(int $publisherID, array $parameters): void
    {
        try {
            $statement = $this->pdo->prepare("
                UPDATE publishers 
                SET name = :name, value = :value, country = :country, founded = :founded 
                WHERE id = {$publisherID};");
            $statement->execute($parameters);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
