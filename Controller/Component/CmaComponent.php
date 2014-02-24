<?php
App::uses('Component', 'Controller');

/**
 * CmaComponent
 */
class CmaComponent extends Component {

/**
 * Initialize callback
 *
 * @return void
 */
	public function initialize(Controller $Controller) {
		parent::initialize($Controller);

		$this->Controller = $Controller;
	}

/**
 * Set a success flash message with optional redirect
 *
 * @see CmaComponent::_flashMessage()
 * 
 * @param string $message the message to display
 * @param string|array|bool $redirect the redirect url
 *
 * @return boolean
 */
	public function success($message, $redirect = true) {
		return self::_flashMessage(__FUNCTION__, $message, $redirect);
	}

/**
 * Set an info flash message with optional redirect
 *
 * @see CmaComponent::_flashMessage()
 * 
 * @param string $message the message to display
 * @param string|array|bool $redirect the redirect url
 *
 * @return boolean
 */
	public function info($message, $redirect = true) {
		return self::_flashMessage(__FUNCTION__, $message, $redirect);
	}

/**
 * Set an error flash message with optional redirect
 *
 * @see CmaComponent::_flashMessage()
 * 
 * @param string $message the message to display
 * @param string|array|bool $redirect the redirect url
 *
 * @return boolean
 */
	public function error($message, $redirect = false) {
		return self::_flashMessage('danger', $message, $redirect);
	}


/**
 * Set a warning flash message with optional redirect
 *
 * @see CmaComponent::_flashMessage()
 * 
 * @param string $message the message to display
 * @param string|array|bool $redirect the redirect url
 *
 * @return boolean
 */
	public function warning($message, $redirect = false) {
		return self::_flashMessage(__FUNCTION__, $message, $redirect);
	}


/**
 * Set an error flash message with optional redirect
 *
 * If redirect === true, referer is used as the redirect
 * 
 * @param string $type the type of message being displayed
 * @param string $message the message to display
 * @param string|array|bool $redirect the redirect url
 *
 * @return boolean
 */
	protected function _flashMessage($type, $message, $redirect = true) {
		if ($message instanceof Exception) {
			$message = $message->getMessage();
		}
		$this->Controller->Session->setFlash($message, 'Cma.flash', array(
			'type' => $type,
		));

		if ($redirect === true) {
			$redirect = $this->Controller->referer();
		}

		if (is_array($redirect) || is_string($redirect)) {
			return $this->Controller->redirect($redirect);
		}

		return true;
	}
}