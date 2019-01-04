<?php

class Person
{
    public $age = 1;

    public function haveBirthday()
    {
        $this->age++;
    }

    public function getAge()
    {
        return $this->age;
    }
}

$joe = new Person;
$joe->haveBirthday();
$joe->haveBirthday();
echo 'Joe: ' . $joe->getAge();

$jane = new Person;
$jane->haveBirthday();
echo 'Jane: ' . $jane->getAge();
