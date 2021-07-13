<?php

$app = [];
$app['config'] = require 'config.php';

require 'core/Router.php';
require 'core/Request.php';
require 'core/database/Connection.php';
require 'core/database/LoginQueryBuilder.php';
require 'core/database/PublisherQueryBuilder.php';
require 'core/database/GamesQueryBuilder.php';
require 'core/Validation.php';
require 'core/LoginCheck.php';
require 'core/LoginValidation.php';

$loginQueryBuilder = new LoginQueryBuilder(
    Connection::make($app['config']['database'])
);
$publisherQueryBuilder = new PublisherQueryBuilder(
    Connection::make($app['config']['database'])
);
$gamesQueryBuilder = new GamesQueryBuilder(
    Connection::make($app['config']['database'])
);

$validation = new Validation();
$loginCheck = new LoginCheck();
$loginValidation = new LoginValidation();

//config.php will return an array and we pass it to the make() method.
