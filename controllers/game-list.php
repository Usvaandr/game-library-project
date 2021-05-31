<?php
$publisherID = array_keys($_GET)[0];
$publisherName = $appGames['database']->selectPublisherName($publisherID);

$games = $appGames['database']->selectAllGames($publisherID);

require 'views/game-list.view.php';
