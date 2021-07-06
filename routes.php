<?php

//$router->define([
//    '' => 'controllers/index.php',
//    'games' => 'controllers/game-list.php',
//    'addPublisher' => 'controllers/addPublisher.php',
//    'addGame' => 'controllers/addGame.php'
//]);

$router->get('', 'controllers/index.php');
$router->get('games', 'controllers/game-list.php');
$router->post('addPublisher', 'controllers/addPublisher.php');
$router->post('addGame', 'controllers/addGame.php');
$router->get('deletePublisher', 'controllers/deletePublisher.php');
$router->get('deletePublisherAll', 'controllers/deletePublisherAll.php');
$router->get('deleteGame', 'controllers/deleteGame.php');
$router->get('updatePublisher', 'controllers/updatePublisher.php');
$router->get('updateGame', 'controllers/updateGame.php');
$router->post('updateGameValues', 'controllers/updateGameValues.php');
$router->post('updatePublisherValues', 'controllers/updatePublisherValues.php');
