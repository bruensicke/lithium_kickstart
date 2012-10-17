<?php

use lithium\core\Environment;
use lithium\action\Dispatcher;

if (!extension_loaded('newrelic')) {
	return;
}
Dispatcher::applyFilter('run', function($self, $params, $chain) {
	$result = $chain->next($self, $params, $chain);
	$params = $params['request']->params;
	newrelic_set_appname(sprintf('%s-%s', Environment::get(), Environment::get('App.name')));
	newrelic_name_transaction($params['controller'] . '/' . $params['action']);
	return $result;
});

?>