<?php

class Connection
{
    //static function so we could call it with Connection::
    public static function make($config)
    {
        //connecting to the database and returning results
        //connection fetches items from bootstrap.php $config['database']
        try {
//          when we don't have config.php:
//          return new PDO('mysql:host=localhost;dbname=library', 'root', 'Password1?');

            return new PDO(
                $config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}

// static - makes method (function inside of the CLASS) accessible globally.
// if it is not static I need to call a function like:
// $connection = new Connection();
// $connection->make(); calling a public method.
// If it's static, I don't need an instance. Instead use this:
// Connection::make();
// :: indicates that I'm calling a static method.

// if I want to get a fresh database connection I can make:
// $pdo = Connection->make();
// It will trigger this method and try to return a new instance of PDO.


// previous database connection example where connection is stored in the object $pdo:
//function connectToDb() {
//    try {
//        return new PDO('mysql:host=127.0.0.1;dbname=library', 'root', 'Password1?');
//    } catch (PDOException $e) {
//        die($e->getMessage());
//    }
//}
//$pdo = connectToDb();