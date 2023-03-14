<?php

$time_start = microtime(true);

$servername = "mysqldb";
$username = "djuser";
$password = "djpassword";
$dbname = "trial_db";

// Create connection
$pdo = new PDO('mysql:host='.$servername.';dbname='.$dbname, $username, $password);

$sql = "SELECT id, first_name, last_name, email, birthdate, added FROM authors";
$stmt = $pdo->query($sql);

  // output data of each row
while ($row = $stmt->fetch()) {
    echo "id: " . $row["id"]. " - Name: " . $row["first_name"]. " " . $row["last_name"]. " " . $row["email"]. " " . $row["birthdate"]. " " . $row["added"]. "<br>";
}

$time_end = microtime(true);

function convert($size) {
    $unit=array('b','kb','mb','gb','tb','pb');
    return @round($size/pow(1024,($i=floor(log($size,1024)))),2).' '.$unit[$i];
}

echo 'Time: ' . ($time_end - $time_start) . " sec \n";
echo 'Memory: '.memory_get_usage(). " bytes ".  convert(memory_get_usage(true))   ." \n";
