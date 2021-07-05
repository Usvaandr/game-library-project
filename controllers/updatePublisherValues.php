<?php

$publisherID = $_GET['publisherID'];

$name = $_POST['updatedPublisherName'];
$value = $_POST['updatedPublisherValue'];
$country = $_POST['updatedPublisherCountry'];
$founded = $_POST['updatedPublisherFounded'];

$name_err = $validation->validationNameUpdate($name);
$value_err = $validation->validationValue($value);
$country_err = $validation->validationCountry($country);
$founded_err = $validation->validationFounded($founded);

if (empty($name_err) && empty($value_err) && empty($country_err) && empty($founded_err)) {
    $publisherQueryBuilder->updatePublisher(
        $publisherID,
        [
        'name' => $_POST['updatedPublisherName'],
        'value' => $_POST['updatedPublisherValue'],
        'country' => $_POST['updatedPublisherCountry'],
        'founded' => $_POST['updatedPublisherFounded']
        ]
    );

    header('Location: /');
} else {
    include('controllers/updatePublisher.php');
}
