<?php

require 'src/Business.php';
require 'src/Person.php';
require 'src/Staff.php';

$eric = new Person('Eric Marty');

$staff = new Staff([$eric]);

$champ = new Business($staff);

$champ->hire(new Person('Felix Cat'));

var_dump($champ->getStaffMembers());