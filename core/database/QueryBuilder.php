<?php

class QueryBuilder
{
    /**
     * @var PDO
     */
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectRow(string $tableName, int $id): object
    {
        $statement = $this->pdo->prepare("SELECT * FROM {$tableName} WHERE id = {$id}");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS)[0];
    }

    public function selectName(string $tableName, int $id): string
    {
        $statement = $this->pdo->prepare("SELECT name FROM {$tableName} WHERE id = {$id};");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_OBJ)[0]->name;
    }
}
