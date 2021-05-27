<?php

//$database = require 'core/bootstrap.php';
//
//$newPublisher = $app['database']->insertPublisher('publishers', [
//    'name' => $_POST['newPublisher'],
//]);



$app['database']->insertPublisher('publishers', [
    'name' => $_POST['newPublisher']
]);

header('Location: /');