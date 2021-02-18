<?php

require('Database.php');
require('SingletonDatabase.php');

// get a instance database
$database = new Database('product');
print_r($database->getName());
print_r('</br>');

$database = new Database('product_b');
print_r($database->getName());
print_r('</br>');


// get a instance database with singleton
$databaseSingleton = SingletonDatabase::getInstance('prod');
print_r($databaseSingleton->getName());
print_r('</br>');

$databaseSingleton = SingletonDatabase::getInstance('prod_b');
print_r($databaseSingleton->getName());
