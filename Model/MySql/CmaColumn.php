<?php
App::uses('CmaAppModel', 'Cma.Model');
/**
 * COLUMN Model
 *
 */
class CmaColumn extends CmaAppModel {

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
	public $useTable = 'COLUMNS';

	public $findMethods = array(
		'fields' => true,
	);

	public $order = array(
		'CmaColumn.TABLE_NAME' => 'asc',
		'CmaColumn.ORDINAL_POSITION' => 'asc',
	);

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'TABLE_CATALOG' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'TABLE_SCHEMA' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'TABLE_NAME' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'COLUMN_NAME' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'IS_NULLABLE' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'DATA_TYPE' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'COLUMN_TYPE' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'COLUMN_KEY' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'EXTRA' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'PRIVILEGES' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'COLUMN_COMMENT' => array(
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

	public $belongsTo = array(
		'CmaSchemata' => array(
			'className' => 'Cma.CmaSchemata',
			'foreignKey' => 'TABLE_SCHEMA',
		),
	);

	protected function _findFields($state, $query, $results = array()) {
		if ($state == 'before') {
			if (empty($query[0])) {
				throw new CakeException('Database not found');
			}

			$query['fields'] = array(
			);

			$query['conditions'] = array(
				$this->alias . '.TABLE_SCHEMA' => $query[0],
			);

			$query['contain'] = array(
				'CmaSchemata'
			);

			return $query;
		}

		pr($results);
		exit;
		$results = $results[0];
		$cmaColumn = $results['CmaColumn'];
		unset($results['CmaColumn']);

		pr($cmaColumn);
		exit;

		$tables = array_values(array_unique(Hash::extract($cmaColumn, '{n}.TABLE_NAME')));
		foreach ($tables as $k => $table) {
			$data = Hash::extract($cmaColumn, sprintf('{n}[TABLE_NAME=%s]', $table));
			array_walk($data, function(&$row) {
				$new = array();

				foreach ($row as $k => $v) {
					$new[strtolower($k)] = $v;
				}
				$row = $new;
				$row['privileges'] = explode(',', $row['privileges']);
				$row['is_nullable'] = $row['is_nullable'] == 'NO' ? false : true;
			});
			$tables[Inflector::classify($table)] = $data;
			unset($tables[$k]);
		}

		pr($tables);
		exit;
		//pr($results);
		pr($cmaColumn);
		pr($cmaColumn);
		exit;

		return $results;
	}
}
