<?php
class StopWatch {
    private $startTime;
    private $endTime;

    public function __construct()
    {
        $this->startTime = date('h:i:s');
    }

    /**
     * @return mixed
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param mixed $endTime
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    }

    /**
     * @return mixed
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param mixed $startTime
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
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
}