<?php

$publisherID = $_GET['publisherID'];

$publisherValues = $publisherQueryBuilder->selectThisPublisher($publisherID);

$name = $publisherValues->name;
$value = $publisherValues->value;
$country = $publisherValues->country;
$year = $publisherValues->founded;

require 'views/updatePublisher.view.php';
