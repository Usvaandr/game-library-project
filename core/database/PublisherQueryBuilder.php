<?php

class PublisherQueryBuilder
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAllPublishers(): array
    {
        $statement = $this->pdo->prepare("SELECT * FROM publishers"); // parameters instead of {$table}
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

    public function selectThisPublisher(int $id): object
    {
        $statement = $this->pdo->prepare("SELECT * FROM publishers WHERE id = {$id}");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS)[0];
    }

    public function selectThisPublisherName(int $id): string
    {
        $statement = $this->pdo->prepare("SELECT name FROM publishers WHERE id = {$id}");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS)[0]->name;
    }

    public function insertPublisher(array $parameters): void
    {
        $sql = 'INSERT INTO publishers (name, value, country, founded) 
                VALUES (:name, :value, :country, :founded);';
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function deletePublisher(int $publisherID): ?string
    {
        try {
            $statement = $this->pdo->prepare("DELETE FROM publishers WHERE id = {$publisherID};");
            $statement->execute();

            return null;
        } catch (Exception $e) {
            return "Game Publisher has games in his library. Delete them first.";
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
            echo $e->getMessage();
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
            echo $e->getMessage();
        }
    }
}
