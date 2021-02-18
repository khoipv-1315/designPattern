<?php

require_once 'EmployeeTemplate.php';

class Manager extends EmployeeTemplate
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function work()
    {
        echo 'Meeting customer...';
    }

    public function getName()
    {
        echo 'name: ' . $this->name;
    }
}