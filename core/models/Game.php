<?php

class Game
{
    private int $id;
    private string $username;
    private string $password;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): Game
    {
        $this->id = $id;
        return $this;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): Game
    {
        $this->username = $username;
        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): Game
    {
        $this->password = $password;
        return $this;
    }


}
