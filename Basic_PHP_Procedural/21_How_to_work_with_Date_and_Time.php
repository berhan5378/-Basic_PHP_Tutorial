<?php
/* data and time */

$currentTime= time();
echo $currentTime."\n"; // 1721373323 

echo date('m/d/Y g:ia')."\n"; // 7/19/2024 7:23am

echo date('m/d/Y g:ia', $currentTime+5*24*60*60)."\n"; // 07/24/2024 7:25am 
echo date_default_timezone_get()."\n";// UTC

date_default_timezone_set('America/New_York');
echo date('m/d/Y g:ia')."\n"; // 07/19/2024 3:38am

echo date('m/d/Y g:ia', $currentTime+5*24*60*60)."\n"; // 07/19/2024 3:38am
 
echo date_default_timezone_get()."\n"; // America/New_York

echo  mktime(0, 0, 0, 4, 10, null)."\n"; // 955339200

echo  date('m/d/Y g:ia', mktime(0, 0, 0, 4, 10, null))."\n"; // 04/10/2000 12:00am

echo  strtotime('2024-01-18  07:00:00')."\n"; // 1705579200
echo  date('m/d/Y g:ia', strtotime('2024-01-18  07:00:00'))."\n"; // 01/18/2024 7:00am
echo  date('m/d/Y g:ia', strtotime('tomorrow'))."\n"; // 07/20/2024 12:00am
echo  date('m/d/Y g:ia', strtotime('first day of february 2024'))."\n"; // 02/01/2024 12:00am
echo  date('m/d/Y g:ia', strtotime('second friday of January'))."\n"; // 01/12/2024 12:00am

$Date= date('m/d/Y g:ia', strtotime('second friday of January'))."\n"; // 01/12/2024 12:00am

print_r(date_parse($Date));
/*
Array
(
    [year] => 2024
    [month] => 1
    [day] => 12
    [hour] => 0
    [minute] => 0
    [second] => 0
    [fraction] => 0
    [warning_count] => 0
    [warnings] => Array
        (
        )

    [error_count] => 0
    [errors] => Array
        (
        )

    [is_localtime] =>
)
    */