<?php
// all this will do is scan a port and return if it is open or closed
//updated for server
$host = '127.0.0.1'; 
$searchedPorts = range(1, 65535);
$easierSearch = array(21, 22, 23, 25, 53, 80, 110, 143, 443, 3306, 8080); // Common ports
set_time_limit(300);
@ob_end_flush();
@ob_implicit_flush(true);

$timeoutTest = 0.2;

foreach($searchedPorts as $port) {
    $connection = @fsockopen($host, $port, $errno, $errstr, $timeoutTest);
    
    if (is_resource($connection)) {
        echo "Port {$port} is open.<br>\n";
        fclose($connection);
    } else {
        echo "Port {$port} is closed.<br>\n";
    }
    flush();
    usleep(100000); // Sleep for 0.1 seconds to avoid overwhelming
}

?>