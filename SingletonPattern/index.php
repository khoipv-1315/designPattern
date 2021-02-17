<?php
require('database.php');
require('databaseSingleton.php');
$database = new database('product');
print_r($database->getName());
print_r('</br>');
$database = new database('product_b');
print_r($database->getName());
print_r('</br>');

$databaseSingleton = databaseSingleton::getInstance('prod');
print_r($databaseSingleton->getName());
print_r('</br>');
$databaseSingleton = databaseSingleton::getInstance('prod_b');
print_r($databaseSingleton->getName());
