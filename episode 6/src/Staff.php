<?php

namespace Basecamp;

use Basecamp\Users\Person;

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
