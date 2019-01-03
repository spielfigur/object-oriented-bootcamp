<?php

class Person
{
    public $name;

    private $age;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        if ($age < 18) {
            throw new Exception('Person is not old enough.');
        }
        $this->age = $age;
    }
}

$john = new Person('John Doe');
$john->setAge(42);

// $john->age = 8; // not working anymore: private

var_dump($john);
