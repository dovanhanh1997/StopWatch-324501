<?php

class StopWatch
{
    public $startTime;
    public $endTime;

    public function __construct()
    {
        $this->startTime = date("h:i:s");
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
    }

    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    }

    public function start()
    {
        $this->startTime = microtime();
    }

    public function stop()
    {
        $this->endTime = microtime();
    }

    public function getElapsedTime()
    {
        return $this->endTime - $this->startTime;
    }
}