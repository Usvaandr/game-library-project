<?php

$publishers = $app['database']->selectAllPublishers();

require 'views/index.view.php';
