<?php

function rutime($ru, $rus, $index) {
    return ($ru["ru_$index.tv_sec"]*1000 + intval($ru["ru_$index.tv_usec"]/1000))
        -  ($rus["ru_$index.tv_sec"]*1000 + intval($rus["ru_$index.tv_usec"]/1000));
}

$ru = getrusage();

$time_start = microtime(true);


$str = '';
for ($i = 1000000; $i > 0; $i--) {
	$str .= 'String concatenation. ';
}


$time_end = microtime(true);

function convert($size) {
    $unit=array('b','kb','mb','gb','tb','pb');
    return @round($size/pow(1024,($i=floor(log($size,1024)))),2).' '.$unit[$i];
}

echo 'Time: ' . ($time_end - $time_start) . " sec \n";
echo 'Memory: '.memory_get_usage(). " bytes ".  convert(memory_get_usage(true))   ." \n";
