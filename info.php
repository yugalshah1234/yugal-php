<?php
require_once '/home/amit/vendor/autoload.php';

echo "start sending";
use Monolog\Logger;
use Monolog\Handler\LogglyHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Formatter\LogglyFormatter;

$log = new Logger('appName');
$log->pushHandler(new LogglyHandler('45866f2f-57c3-459c-bc3d-a19214c34edf/tag/monolog', Logger::WARNING));
try {
	echo "Withing try block";
}
catch(Exception $e) {
	 echo 'Message: ' .$e->getMessage();
}

$log->addWarning('test logs to loggly');
echo "end sending";
?>
