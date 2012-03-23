<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2011, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

define('LITHIUM_APP_PATH', dirname(dirname(__DIR__)));
define('LITHIUM_LIBRARY_PATH', LITHIUM_APP_PATH . '/libraries');
if (!include LITHIUM_LIBRARY_PATH . '/lithium/core/Libraries.php') {
	$message  = "Lithium core could not be found.  Check the value of LITHIUM_LIBRARY_PATH in ";
	$message .= __FILE__ . ".  It should point to the directory containing your ";
	$message .= "/libraries directory.";
	throw new ErrorException($message);
}

use lithium\core\Libraries;

Libraries::add('lithium');
Libraries::add('app', array('default' => true));

// Libraries::add('li3_mustache');

?>