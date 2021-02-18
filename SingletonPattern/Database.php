<?php

class Database
{
    private $record;
    private $name;

    public function __construct($name) {
        $this->name = $name;
        $this->record = 0;
    }

    public function getName()
    {
        return $this->name;
    }

    public function editRecord($operation)
    {
        return printf('Performing a %s operation on record %s  in database %s',
            $operation,
            $this->record,
            $this->name
        );
    }
}