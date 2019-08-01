<?php
$timeStart = microtime();
usleep(100);
$timeEnd = microtime();
$time = $timeEnd - $timeStart;
echo '<br>'.$time;