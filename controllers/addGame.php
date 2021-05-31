<?php
$publisherID = $_GET['publisher'];

$gamesQueryBuilder->insertGame([
    'name' => $_POST['newGameName'],
    'year' => $_POST['newGameYear'],
    'publisherID' => $publisherID
]);

header('Location: /games?publisher='.$publisherID);
