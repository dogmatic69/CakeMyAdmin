<?php
App::uses('CmaAppModel', 'Cma.Model');

class CmaDatabase extends CmaAppModel {
	
	public $useTable = false;

	public function databases() {
		$databases = array_values(Hash::flatten($this->query('SHOW DATABASES')));
		foreach ($databases as &$database) {
			$database = self::database($database, true);
		}

		return $databases;
	}

	public function database($name, $simple = false) {
		pr($this->query(sprintf('SHOW DATABASE %s', $name)));
		exit;
	}
}