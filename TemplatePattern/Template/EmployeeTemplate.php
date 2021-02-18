<?php

abstract class EmployeeTemplate
{
     public function start()
    {
        echo 'Starting at 8 am...';
    }

    public function work()
    {
        echo 'Performing ...';
    }

    public function takePause()
    {
        echo 'Relax ...';
    }

    public function stop()
    {
        echo 'Stopping...';
    }

    public function go()
    {
        $this->start();
        echo '</br>';
        $this->work();
        echo '</br>';
        $this->takePause();
        echo '</br>';
        $this->work();
        echo '</br>';
        $this->stop();
    }
}