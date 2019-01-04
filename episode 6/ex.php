<?php

use Basecamp\Users\Person;
use Basecamp\Business;
use Basecamp\Staff;

$jeffrey = new Person('Jeffrey Way');

$staff = new Staff(array($jeffrey));

$laracasts = new Business($staff);

//$laracasts->hire($jeffrey);

$laracasts->hire(new Person('John Doe'));
$laracasts->hire(new Person('Jane Doe'));

//echo var_dump($laracasts);

echo var_dump($laracasts->getStaffMembers());
