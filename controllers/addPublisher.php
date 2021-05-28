<?php

$app['database']->insertPublisher([
    'name' => $_POST['newPublisher'],
    'value' => $_POST['newPublisherValue'],
    'country' => $_POST['newPublisherCountry'],
    'founded' => $_POST['newPublisherFounded']
]);

header('Location: /');
