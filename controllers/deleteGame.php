<?php

$gamesQueryBuilder->deleteGame($_GET['gameID']);

header('Location: /games?publisherID='.$_GET['publisherID']);
