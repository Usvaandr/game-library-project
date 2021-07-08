<?php

class Validation {

//    private function getQueryBuilder()
//    {
//        return new PublisherQueryBuilder(
//            Connection::make($app['config']['database'])
//        );
//    }

    /**
     * @param string[] $allPublisherNames
     */
    public function validationName(string $name, array $allPublisherNames): ?string
    {
        if (empty($name)) {
            return 'Name is required';
        } elseif (in_array($name, $allPublisherNames)) {
            return 'This publishers already exists';
        }

        return null;
    }

    public function validationValue(string $value): ?string
    {
        if (empty($value)) {
            return 'Value is required';
        }

        return null;
    }

    public function validationCountry(string $country): ?string
    {
        if (empty($country)) {
            return 'Country is required';
        }

        return null;
    }

    public function validationFounded(string $founded): ?string
    {
        if (empty($founded)) {
            return 'Year is required';
        } elseif (strlen($founded) < 4) {
            return 'Year is too short';
        }

        return null;
    }

    public function validationNameUpdate(string $name): ?string
    {
        if (empty($name)) {
            return 'Name is required';
//        } elseif (in_array($name, $this->getQueryBuilder()->selectAllPublisherNames())) {
//            return 'This publishers already exists';
        }

        return null;
    }
}
