<?php

$publishers = $publisherQueryBuilder->selectAllPublishers();

$gameID = $_GET['gameID'];
$publisherID = $_GET['publisherID'];

$publisherName = $publisherQueryBuilder->selectThisPublisherName($publisherID);

$gameValues = $gamesQueryBuilder->selectThisGame($gameID);

$name = $gameValues->name;
$year = $gameValues->year;
$publisher = $gameValues->publisherID;

require 'views/updateGame.view.php';
