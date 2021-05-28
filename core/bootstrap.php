<?php

$app = [];
$app['config'] = require 'config.php';

require 'core/Router.php';
require 'core/Request.php';
require 'core/database/Connection.php';
require 'core/database/PublisherQueryBuilder.php';

$app['database'] = new PublisherQueryBuilder(
    Connection::make($app['config']['database'])
);

//config.php will return an array and we pass it to the make() method.
