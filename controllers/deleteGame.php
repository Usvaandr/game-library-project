<?php

$gamesQueryBuilder->deleteGame($_GET['id']);

header('Location: /games?publisher='.$_GET['publisher']);
