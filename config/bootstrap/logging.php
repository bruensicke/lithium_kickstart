<?php

use lithium\analysis\Logger;

Logger::config(array(
	'default' => array(
		'adapter' => 'File',
		'path' => LITHIUM_APP_PATH . '/log',
	),
 	'system' => array(
 		'adapter' => 'Syslog',
		'priority' => array('emergency', 'alert', 'critical', 'error', 'warning', 'notice', 'info'),
 	)
));

