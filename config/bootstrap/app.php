<?php

use lithium\core\Environment;

$config = include dirname(__DIR__) . '/app.php';

// localhost
Environment::set('development', $config);

// fallback, if environment is unknown
Environment::set('production', $config);
