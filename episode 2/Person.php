<?php

class Person
{
    public $name;
    public $age;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getAgeinDays()
    {
        return $this->age * 365;
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

var_dump($john);

var_dump($john->getAgeinDays());
