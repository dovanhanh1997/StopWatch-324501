<?php
include_once 'StopWatch.php';

$stopWatch = new StopWatch();

echo $stopWatch->getStartTime().'<br>';

$stopWatch->start();
for ($i = 0; $i < 1000; $i++) {
    echo $i . ' ';
}
echo '<br>';
$stopWatch->stop();
echo $stopWatch->getElapsedTime();
