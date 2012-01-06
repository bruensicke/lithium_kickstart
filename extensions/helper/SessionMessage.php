<?php

namespace app\extensions\helper;

use app\extensions\SessionMessage as SessionMessageExtension;

class SessionMessage extends \lithium\template\Helper {

	protected $_strings = array(
		'message' => '<div class="alert-message {:type}" data-alert="alert"><a class="close" href="#">×</a><p>{:message}</p></div>'
	);

	public function get($type = null) {
		return SessionMessageExtension::retrieve($type);
	}

	public function render($type = null) {
		$message = SessionMessageExtension::retrieve($type);
		return $message ? $this->_render(__METHOD__, 'message', compact('type', 'message')) : '';
	}

	public function renderAll() {
		$messages = (array) SessionmessageExtension::retrieve();
		$out = '';
		foreach ($messages as $type => $message) {
			$out .= $this->_render(__METHOD__, 'message', compact('type', 'message'));
		}
		return $out;
	}

}
