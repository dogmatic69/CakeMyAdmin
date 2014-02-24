<?php
App::uses('CakeSession', 'Model/Datasource');

class CmaConnect extends Object {

	protected static $_connections = array();

/**
 * Test connection details
 *
 * @param array $connection the connection details to test
 *
 * @return boolean
 */
	public static function testConnection(array $connection) {
		try {
			return ConnectionManager::create('testing_connection', $connection) instanceof DboSource;
		} catch (Exception $e) {
			
		}
		return false;
	}

	public static function connect($database = null) {
		$connection = self::connectionName($database);

		if (empty(self::$_connections[$connection])) {
			$details = CakeSession::read('Cma.login');
			if (empty($details)) {
				throw new CakeException('Please login');
			}
			$details['database'] = $connection;

			self::$_connections[$connection] = ConnectionManager::create($connection, $details);			
		}

		return self::$_connections[$connection];
	}

	public static function privileges() {		
		$grants = array_values(Hash::flatten(ClassRegistry::init('Cma.CmaSchemata')->query('SHOW GRANTS;')));
		foreach ($grants as &$grant) {
			$grant = array(
				'grant' => preg_match('/WITH GRANT/', $grant),
				'password' => preg_match('/IDENTIFIED BY PASSWORD/', $grant),
				'permissions' => self::_grantedPermissions($grant),
				'target' => self::_grantedTarget($grant),
				'user' => self::_grantedUser($grant),
			);
		}
		return $grants;
	}

	public static function loadModel($database, $table) {
		self::connect($database);
		$class = array('class' => Inflector::classify($table), 'ds' => $database, 'table' => $table);
		return ClassRegistry::init($class);
	}

	public static function connectionName($database) {
		if ($database === null) {
			return CakeSession::read('Cma.login.database');
		}

		return $database;
	}

	public static function databaseExists($database) {
		$db = null;
		try {
			$db = self::connect($database);
		} catch (Exception $e) {
			list(, $message) = array_values($e->getAttributes());
			return !preg_match('/unknown database/i', $message);
		}

		return $db instanceof DboSource;
	}

	protected static function _grantedUser($grant) {
		preg_match('/TO \'([a-z0-9_-]+)\'@\'([a-z0-9_-]+)\' /', $grant, $grantUser);
		return array(
			'user' => $grantUser[1],
			'database' => $grantUser[2],
		);
	}

	protected static function _grantedPermissions($grant) {
		preg_match('/GRANT (.*) ON/', $grant, $grantedPermissions);
		if (!empty($grantedPermissions[1])) {
			if ($grantedPermissions[1] == 'ALL PRIVILEGES') {
				return array('all');
			}
			return explode(' ', strtolower($grantedPermissions[1]));
		}
		
		return array();
	}

	protected static function _grantedTarget($grant) {
		preg_match('/ON (.*) TO/', $grant, $grantTarget);
		if (!empty($grantTarget[1])) {
			if ($grantTarget[1] == '*.*') {
				return array(
					'database' => '*',
					'table' => '*',
				);
			}
			list($db, $table) = explode('@', $grantTarget[1]);
			return array(
				'database' => trim($db, "'"),
				'table' => trim($table, "'"),
			);
		}

		return array(
			'database' => null,
			'table' => null,
		);
	}
}