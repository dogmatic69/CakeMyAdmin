<?php
App::uses('CakeSchema', 'Model');

class CmaSchema extends CakeSchema {
	public function schema(Model $Model) {
		$db = $Model->getDataSource();
		@$schema = $this->_columns($Model);
		
		foreach ($schema as $field => &$config) {
			$config = array_merge(array(
				'field_name' => $field,
				'type' => null,
				'null' => sprintf('- %s -', __d('cma', 'Not Set')),
				'default' => sprintf('- %s -', __d('cma', 'Not Set')),
				'length' => '-',
				'key' => null,
				'collate' => '-',
				'charset' => '-',
				'info' => null,
				'actions' => null,
			), Hash::filter($config));
		}

		return array(
			'database' => $db->listDetailedSources($Model->useTable),
			'schema' => array_values($schema),
			'indexes' => $db->index($Model),
			'tableParameters' => $db->readTableParameters($Model->useTable),
		);
	}

/**
 * Generate a CakeSchema object that can be used for droping / adding tables 
 */
	public static function cakeSchema($database, array $tables = array()) {
		CmaConnect::connect($database);

		return CakeSchema(array(
			'connection' => $database,
			'tables' => $tables,
		));
	}
}