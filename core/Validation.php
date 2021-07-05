<?php

class Validation {

//    private function getQueryBuilder()
//    {
//        return new PublisherQueryBuilder(
//            Connection::make($app['config']['database'])
//        );
//    }

    public function validationName($name, $allPublisherNames)
    {
        if (empty($name)) {
            return 'Name is required';
        } elseif (in_array($name, $allPublisherNames)) {
            return 'This publishers already exists';
        }
    }

    public function validationValue($value)
    {
        if (empty($value)) {
            return 'Value is required';
        }
    }

    public function validationCountry($country)
    {
        if (empty($country)) {
            return 'Country is required';
        }
    }

    public function validationFounded($founded)
    {
        if (empty($founded)) {
            return 'Year is required';
        } elseif (strlen($founded) < 4) {
            return 'Year is too short';
        }
    }

    public function validationNameUpdate($name)
    {
        if (empty($name)) {
            return 'Name is required';
//        } elseif (in_array($name, $this->getQueryBuilder()->selectAllPublisherNames())) {
//            return 'This publishers already exists';
        }
    }
}
