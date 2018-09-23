<?php
require 'vendor/autoload.php';
use Acme\Users\Person;
use Acme\Business;
use Acme\Staff;

$jeffrey = new Person('jeffrey way');

$staff = new Staff([$jeffrey]);

$laracasts = new Business($staff);

$laracasts->hire(new Person('jane doe'));

//var_dump($staff);
echo ("<pre>");
var_dump($laracasts->getStaffMembers());
echo ("</pre>");