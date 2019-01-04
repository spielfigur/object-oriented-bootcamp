<?php

namespace Basecamp;

use Basecamp\Users\Person;

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
