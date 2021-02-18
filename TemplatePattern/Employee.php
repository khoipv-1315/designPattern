<?php

class Employee
{
    public function __construct()
    {
    }

    public function start()
    {
        return "Starting at 8 am...";
    }

    public function work()
    {
        return "Write code...";
    }

    public function takePause()
    {
        return "Relax ...";
    }

    public function stop()
    {
        return "Stopping...";
    }

    public function go()
    {
        echo $this->start();
        echo '</br>';
        echo $this->work();
        echo '</br>';
        echo $this->takePause();
        echo '</br>';
        echo $this->work();
        echo '</br>';
        echo $this->stop();
    }
}
