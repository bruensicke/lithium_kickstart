<?php

namespace app\extensions;

use lithium\storage\Session;

class SessionMessage {

	public static $topKey = 'SessionMessage';

	public static function __callStatic($method, $arguments) {
		static::_write($method, reset($arguments));
	}

	protected static function _write($type, $message) {
		Session::write(self::$topKey . '.' . $type, $message);
	}

	public static function retrieve($type = null) {
		$key = self::$topKey . ($type ?  '.' . $type : '');
		$message = Session::read($key);
		Session::delete($key);
		return $message;
	}
}
