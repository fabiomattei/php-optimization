<?php

$time_start = microtime(true);

$servername = "mysqldb";
$username = "djuser";
$password = "djpassword";
$dbname = "trial_db";

// Create connection
$pdo = new PDO('mysql:host='.$servername.';dbname='.$dbname, $username, $password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

$sql = "SELECT id, first_name, last_name, email, birthdate, added FROM authors";
$stmt = $pdo->query($sql);

  // output data of each row
while ($item = $stmt->fetch(PDO::FETCH_OBJ)) {
    echo "id: " . $item->id. " - Name: " . $item->first_name. " " . $item->last_name. " " . $item->email. " " . $item->birthdate. " " . $item->added. "<br>";
}

$time_end = microtime(true);

function convert($size) {
    $unit=array('b','kb','mb','gb','tb','pb');
    return @round($size/pow(1024,($i=floor(log($size,1024)))),2).' '.$unit[$i];
}

echo 'Time: ' . ($time_end - $time_start) . " sec \n";
echo 'Memory: '.memory_get_usage(). " bytes ".  convert(memory_get_usage(true))   ." \n";
