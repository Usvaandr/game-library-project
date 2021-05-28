<?php

class PublisherQueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAllPublishers() //removed
    {
        //preparing the sql query
        $statement = $this->pdo->prepare("select * from publishers"); // parameters instead of {$table}
        //executing the query
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
//  public function insertPublisher($table, $parameters)
    public function insertPublisher($parameters)
    {
//        $sql = sprintf(
//            'insert into %s (%s) values (%s);',
//            $table,
//            implode(', ', array_keys($parameters)), //implode turns array into a string and adds separator ', ' in between
//            ':' . implode(', :', array_keys($parameters))
//        );

        $sql = 'insert into publishers (name, value, country, founded) 
                values (:name, :value, :country, :founded);';

        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters); //not clear why we use $parameters in this line
        } catch (Exception $e) {
            die($e->getMessage()); //for local development we could print mysql error message here - $e->getMessage()
        }
    }
}

// fetching all the results and storing in to the object $publishers:
//$publishers = $statement->fetchAll(PDO::FETCH_OBJ);

// fetching all the results and storing in to the CLASS Publisher
//$publishers = $statement->fetchAll(PDO::FETCH_CLASS, 'Publisher');
// instead of storing into the object, returning results
//return $statement->fetchAll(PDO::FETCH_CLASS);

//function fetchPublisherNames($pdo) {
//    $statement = $pdo->prepare('select * from publishers');
//    $statement->execute();
//    return $statement->fetchAll(PDO::FETCH_CLASS, 'Publisher');
//}
//$publishers = fetchPublisherNames($pdo);
//die(var_dump($publishers));

// instead of having function fetchPublisherNames() we created CLASS QueryBuilder
// and now we can call selectAll() static function.
