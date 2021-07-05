<?php

$name = $_POST['newPublisherName'];
$value = $_POST['newPublisherValue'];
$country = $_POST['newPublisherCountry'];
$founded = $_POST['newPublisherFounded'];

$allPublisherNames = $publisherQueryBuilder->selectAllPublisherNames();

$name_err = $validation->validationName($name, $allPublisherNames);
$value_err = $validation->validationValue($value);
$country_err = $validation->validationCountry($country);
$founded_err = $validation->validationFounded($founded);

if (empty($name_err) && empty($value_err) && empty($country_err) && empty($founded_err)) {
    $publisherQueryBuilder->insertPublisher([
        'name' => $_POST['newPublisherName'],
        'value' => $_POST['newPublisherValue'],
        'country' => $_POST['newPublisherCountry'],
        'founded' => $_POST['newPublisherFounded']
    ]);

    header('Location: /');
} else {
    include('controllers/index.php');
}
