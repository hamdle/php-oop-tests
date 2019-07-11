<?php

require 'vendor/autoload.php';

use Champ\Users\Person;
use Champ\Staff;
use Champ\Business;

$eric = new Person('Eric Marty');

$staff = new Staff([$eric]);

$champ = new Business($staff);

$champ->hire(new Person('Felix Cat'));

var_dump($champ->getStaffMembers());