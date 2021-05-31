<?php
$publisherID = $_GET['publisher'];

$publisherName = $gamesQueryBuilder->selectPublisherName($publisherID);

$games = $gamesQueryBuilder->selectAllGames($publisherID);

require 'views/game-list.view.php';
