<?php

$publisherID = $_GET['publisherID'];

$name = $_POST['updatedPublisherName'];
$value = $_POST['updatedPublisherValue'];
$country = $_POST['updatedPublisherCountry'];
$year = $_POST['updatedPublisherYear'];

$allPublisherNames = $publisherQueryBuilder->selectAllPublisherNames();

if(empty($name)) {
    $name_err = 'Name is required';
} elseif (in_array($name, $allPublisherNames)){
    $name_err = 'This publishers already exists';
}

if(empty($value)) {
    $value_err = 'Value is required';
}

if(empty($country)) {
    $country_err = 'Country is required';
}

if(empty($year)) {
    $founded_err = 'Year is required';
} elseif(strlen($year) < 4) {
    $founded_err = 'Year is too short';
}

if(empty($name_err) && empty($value_err) && empty($country_err) && empty($founded_err)) {
$publisherQueryBuilder->updatePublisher($publisherID, [
    'name' => $_POST['updatedPublisherName'],
    'value' => $_POST['updatedPublisherValue'],
    'country' => $_POST['updatedPublisherCountry'],
    'year' => $_POST['updatedPublisherYear']
]);

    header('Location: /');
} else {
    include('controllers/updatePublisher.php');
}
