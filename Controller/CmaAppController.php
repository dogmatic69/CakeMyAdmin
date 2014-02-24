<?php
App::uses('String', 'Utility');
App::uses('AppController', 'Controller');

class CmaAppController extends Controller {

	public $layout = 'cma';

	public $components = array(
		'Auth' => array(
			'loginRedirect' => array(
				'plugin' => 'cma',
				'controller' => 'cma',
				'action' => 'index',
			),
			'logoutRedirect' => array(
				'plugin' => 'cma',
				'controller' => 'cma',
				'action' => 'login',
            ),
            'loginAction' => array(
				'plugin' => 'cma',
				'controller' => 'cma',
				'action' => 'login',
            ),
			'authenticate' => array(
				'Cma.Cma' => array(
					'fields' => array(
						'username',
						'password',
						'host',
						'port',
					)
				)
			),
			'authError' => 'Authentication required',
			'sessionKey' => 'Auth.Cma'
		),
		'Paginator',
		'Cma.Cma',
	);

	public function beforeFilter() {
		parent::beforeFilter();

		AuthComponent::$sessionKey = 'Auth.Cma';
		if (!$this->Auth->user()) {
			return;
		}

		$this->_DB = CmaConnect::connect();
		self::_availableTables();
	}

	protected function _availableTables() {
		$class = array('class' => 'Cma.CmaSchemata', 'ds' => 'information_schema');
		$this->set('databaseList', ClassRegistry::init($class)->find('databaseWithTables'));
	}
}
