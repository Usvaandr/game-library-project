<?php

$gameID = $_GET['gameID'];
$publisherID = $_GET['publisherID'];

$name = $_POST['updatedGameName'];
$year = $_POST['updatedGameYear'];
$publisher = $_POST['updatedGamePublisher'];

$gamesQueryBuilder->updateGame(
    $gameID,
    [
        'name' => $_POST['updatedGameName'],
        'year' => $_POST['updatedGameYear'],
        'publisher' => $_POST['updatedGamePublisher']
    ]
);

header('Location: /games?publisherID='.$publisherID);
