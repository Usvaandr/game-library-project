<?php

$name = $_POST['newPublisher'];
$value = $_POST['newPublisherValue'];
$country = $_POST['newPublisherCountry'];
$founded = $_POST['newPublisherFounded'];

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

if(empty($founded)) {
    $founded_err = 'Year is required';
} elseif(strlen($founded) < 4) {
    $founded_err = 'Year is too short';
}

if(empty($name_err) && empty($value_err) && empty($country_err) && empty($founded_err)) {
    $publisherQueryBuilder->insertPublisher([
        'name' => $_POST['newPublisher'],
        'value' => $_POST['newPublisherValue'],
        'country' => $_POST['newPublisherCountry'],
        'founded' => $_POST['newPublisherFounded']
    ]);

    header('Location: /');
} else {
    include('controllers/index.php');
}
