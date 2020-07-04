<?php
declare(strict_types=1);

namespace App;

class Person {

    private string $name;

    private string $lastname;

    public function __construct(string $name, string $lastname)
    {
        $this->name = $name;
        $this->lastname = $lastname;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getLastname(): string
    {
        return $this->lastname;
    }

    public function getFullName(): string
    {
        return sprintf('%s %s', $this->getName(), $this->getLastname());
    }


}
