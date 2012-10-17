<?php

use lithium\core\Environment;
use lithium\action\Dispatcher;
use lithium\analysis\Logger;

/**
 * This filter intercepts the `run()` method of the `Dispatcher`, and first passes the `'request'`
 * parameter (an instance of the `Request` object) to the `Environment` class to detect which
 * environment the application is running in. Then, loads all application routes in all plugins,
 * loading the default application routes last.
 *
 * @see lithium\action\Request
 * @see lithium\core\Environment
 * @see lithium\net\http\Router
 */
Dispatcher::applyFilter('run', function($self, $params, $chain) {

	Environment::is(function($request) {
		switch (true) {
			case ($request->env('HTTP_HOST') == 'localhost'):
			case ($request->env('HTTP_HOST') == 'domain.local'):
			case (preg_match('/^(master|stable|dev)\./i', $request->env('HTTP_HOST'))):
			case (in_array($request->env('SERVER_ADDR'), array('127.0.0.1'))):
				return 'development';
			case (preg_match('/\/test\//', $request->env('REQUEST_URI'))):
				return 'test';
			case ($request->env('HTTP_HOST') == 'example.com'):
			default:
				return 'production';
		}
	});

	$config = include dirname(__DIR__) . '/app.php';
	Environment::set($params['request']);
	Environment::set(Environment::get(), $config);
	if (!Environment::is('production') && function_exists('apc_clear_cache')) {
		apc_clear_cache();
	}

	return $chain->next($self, $params, $chain);
});