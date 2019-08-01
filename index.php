<?php
include_once 'StopWatch.php';

$stopWatch = new StopWatch();

echo 'Start ' . $stopWatch->getStartTime() . '<br>';
$stopWatch->start();
for ($i = 0; $i < 1000; $i++) {
    echo $i.' ';
}
$stopWatch->stop();
$time = $stopWatch->getElapsedTime();
echo '<br>Run for loop in: '.$time;


