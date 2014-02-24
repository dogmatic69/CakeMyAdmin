<?php
App::uses('CmaAppModel', 'Cma.Model');
/**
 * SCHEMATum Model
 *
 */
class CmaSchemata extends CmaAppModel {

/**
 * Use database config
 *
 * @var string
 */
	public $useDbConfig = 'info';

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'SCHEMATA';

	public $primaryKey = 'SCHEMA_NAME';

	public $displayField = 'SCHEMA_NAME';

	public $order = array(
		'CmaSchemata.SCHEMA_NAME' => 'asc',
	);

	public $findMethods = array(
		'databases' => true,
		'tables' => true,
		'databaseWithTables' => true,
	);

	public $virtualFields = array(
		'name' => 'CmaSchemata.SCHEMA_NAME',
		'character_set' => 'CmaSchemata.DEFAULT_CHARACTER_SET_NAME',
		'collation' => 'CmaSchemata.DEFAULT_COLLATION_NAME',
	);

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'CATALOG_NAME' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'SCHEMA_NAME' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'DEFAULT_CHARACTER_SET_NAME' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'DEFAULT_COLLATION_NAME' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	public $hasMany = array(
		'CmaColumn' => array(
			'className' => 'Cma.CmaColumn',
			'foreignKey' => 'TABLE_SCHEMA',
		),
	);

	protected function _findDatabases($state, $query, $results = array()) {
		if ($state == 'before') {
			$query['fields'] = array(
				$this->alias . '.name',
				$this->alias . '.character_set',
				$this->alias . '.collation',
			);

			$query['contain'] = false;

			return $query;
		}

		return $results;
	}

	protected function _findTables($state, $query, $results = array()) {
		if ($state == 'before') {
			$query['fields'] = array(
				$this->alias . '.name',
				$this->alias . '.character_set',
				$this->alias . '.collation',
			);

			$query['conditions'] = array(
				$this->alias . '.name' => $query[0],
			);

			$query['contain'] = false;

			return $query;
		}

		if (empty($results)) {
			return array();
		}

		$results[0]['Table'] = Hash::extract($this->query(sprintf('SHOW TABLE STATUS FROM %s', $query[0])), '{n}.TABLES');

		return $results[0];
	}

	protected function _findDatabaseWithTables($state, $query, $results = array()) {
		if ($state == 'before') {
			return self::_findDatabases($state, $query);
		}

		foreach ($results as &$result) {
			$result = $this->find('tables', $result[$this->alias]['name']);
		}

		return $results;
	}
}
