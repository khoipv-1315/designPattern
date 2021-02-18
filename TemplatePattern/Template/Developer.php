<?php

require_once 'EmployeeTemplate.php';

class Developer extends EmployeeTemplate
{
    public function __construct()
    {
        //
    }

    public function work()
    {
        echo 'Write code...';
    }

    public function takePause()
    {
        echo 'Lunch and sleep ...';
    }
}