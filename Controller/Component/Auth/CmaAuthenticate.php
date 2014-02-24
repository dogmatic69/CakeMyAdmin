<?php
App::uses('BaseAuthenticate', 'Controller/Component/Auth');

class CmaAuthenticate extends BaseAuthenticate {

/**
 * Authentication is done by checking the connection details are able to connect 
 * to the server.
 *
 * @param CakeRequest $request the request object
 * @param CakeResponse $response the response object
 *
 * @return boolean
 */
	public function authenticate(CakeRequest $request, CakeResponse $response) {
		$connection = array_merge(array(
			'datasource' => 'Database/Mysql',
			'persistent' => false,
			'host' => 'localhost',
			'login' => 'root',
			'password' => 'root',
			'encoding' => 'utf8',
			'database' => 'information_schema',
		), array_filter((array)$request->data));

		if (CmaConnect::testConnection($connection) === true) {
			CakeSession::write('Cma.login', $connection);
			return $connection;
		}
		return false;
	}
}