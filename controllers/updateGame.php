<?php

$publishers = $publisherQueryBuilder->selectAllPublishers();

$gameID = $_GET['gameID'];
$publisherID = $_GET['publisherID'];

$publisherName = $publisherQueryBuilder->selectName('publishers', $publisherID);

$gameValues = $gamesQueryBuilder->selectRow('games', $gameID);

$name = $gameValues->name;
$year = $gameValues->year;
$publisher = $gameValues->publisherID;

require 'views/updateGame.view.php';
