<?php
class StopWatch{
    public $startTime;
    public $endTime;

    public function __construct()
    {
        $this->startTime = date('h:i:s');
    }

    public function start(){
        $this->startTime = microtime();
    }

    public function stop(){
        $this->endTime = microtime();
    }

    public function getElapsedTime(){
        return $this->endTime - $this->startTime;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

}