<?php

use lithium\analysis\Logger;

Logger::config(array(
	'default' => array(
		'development' => array(
			'adapter' => 'File',
		),
		'production' => array(
			'adapter' => 'File',
		),
	),
));

