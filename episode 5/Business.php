<?php

class Person
{
    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Business
{
    protected $staff;

    public function __construct($staff)
    {
        $this->staff = $staff;
    }

    public function hire(Person $person)
    {
        $this->staff->add($person);
    }

    public function getStaffMembers()
    {
        return $this->staff->members();
    }
}

class Staff
{
    protected $members = array();

    public function __construct($members = array())
    {
        $this->members = $members;
    }

    public function add(Person $person)
    {
        $this->members[] = $person;
    }

    public function members()
    {
        return $this->members;
    }
}

$jeffrey = new Person('Jeffrey Way');

$staff = new Staff(array($jeffrey));

$laracasts = new Business($staff);

//$laracasts->hire($jeffrey);

$laracasts->hire(new Person('John Doe'));
$laracasts->hire(new Person('Jane Doe'));

//echo var_dump($laracasts);

echo var_dump($laracasts->getStaffMembers());
