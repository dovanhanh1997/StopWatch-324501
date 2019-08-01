<?php


class StopWatch
{
    private $startTime;
    private $endTime;

    public function __construct()
    {
        $this->startTime = date("h:i:s");
    }

    /**
     * @return mixed
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @return mixed
     */
    public function getEndTime()
    {
        return $this->endTime;
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