<?php

$publishers = $publisherQueryBuilder->selectAllPublishers();

require 'views/index.view.php';
