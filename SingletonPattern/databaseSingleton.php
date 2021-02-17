<?php

class databaseSingleton
{
    private $record;
    private $name;
    private static $singletonObject;

    private function __construct($name) {
        $this->name = $name;
        $this->record = 0;
    }

    public static function getInstance($name)
    {
        if (self::$singletonObject == null) {
            self::$singletonObject = new databaseSingleton($name);
        }

        return self::$singletonObject;
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