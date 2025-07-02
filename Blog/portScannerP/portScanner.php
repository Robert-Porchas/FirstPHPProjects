<?php
// all this will do is scan a port and return if it is open or closed
$host = '127.0.0.1'; 
$searchedPorts = range(1, 65535);

$timeoutTest = 1;

foreach($searchedPorts as $port) {
    $connection = @fsockopen($host, $port, $errno, $errstr, $timeoutTest);
    
    if (is_resource($connection)) {
        echo "Port {$port} is open.<br>\n";
        fclose($connection);
    }
}

?>