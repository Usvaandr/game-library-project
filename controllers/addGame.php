<?php
$publisherID = $_GET['publisherID'];

$gamesQueryBuilder->insertGame([
    'name' => $_POST['newGameName'],
    'year' => $_POST['newGameYear'],
    'publisherID' => $publisherID
]);

header('Location: /games?publisherID='.$publisherID);
