<?php
namespace app\extensions\helper;

use lithium\core\Environment;

class App extends \lithium\template\Helper {

	/**
	 * Make every attribute callable as method,
	 * auto-prepends App. in case, no dot is found.
	 *
	 * @see App::get()
	 * @param string $method 
	 * @param string $arguments 
	 * @return mixed
	 */
	public function __call($method, $arguments) {
		if(!stristr($method, '.')) {
			$method = "App.$method";
		}
		return $this->get($method, $arguments);
	}

	/**
	 * Retrieve information from Environment
	 *
	 * @param string $type 
	 * @return mixed
	 */
	public function get($type = null) {
		// if()
		return Environment::get($type);
	}

}
