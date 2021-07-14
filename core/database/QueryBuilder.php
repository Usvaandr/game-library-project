<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectRow(string $table, int $id): object
    {
        $statement = $this->pdo->prepare("SELECT * FROM {$table} WHERE id = {$id}");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS)[0];
    }

    public function selectName(string $table, int $id): string
    {
        $statement = $this->pdo->prepare("SELECT name FROM {$table} WHERE id = {$id};");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_OBJ)[0]->name;
    }
}
