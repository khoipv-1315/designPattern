<?php

require_once 'Template/Developer.php';
require_once 'Template/Manager.php';
require_once 'Employee.php';

// go employee
$employee = new Employee();
$employee->go();

// use template
$developer = new Developer();
echo '</br>';
echo '</br>';
echo '</br>';
echo '--------- developer -----------';
echo '</br>';
$developer->go();

$manager = new Manager('manager work');
echo '</br>';
echo '--------- manager -----------';
echo '</br>';
$manager->go();




