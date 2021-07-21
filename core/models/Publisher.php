<?php

class Publisher
{
    private int $id;

    private string $name;

    private string $value;

    private string $country;

    private string $founded;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): Publisher
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): Publisher
    {
        $this->name = $name;

        return $this;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function setValue(string $value): Publisher
    {
        $this->value = $value;
        return $this;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function setCountry(string $country): Publisher
    {
        $this->country = $country;
        return $this;
    }

    public function getFounded(): string
    {
        return $this->founded;
    }

    public function setFounded(string $founded): Publisher
    {
        $this->founded = $founded;

        return $this;
    }
}
