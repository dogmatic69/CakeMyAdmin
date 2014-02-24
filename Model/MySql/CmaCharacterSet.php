<?php
App::uses('CmaAppModel', 'Cma.Model');
/**
 * CHARACTERSET Model
 *
 */
class CmaCharacterSet extends CmaAppModel {

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
	public $useTable = 'CHARACTER_SETS';

	public $primaryKey = 'CHARACTER_SET_NAME';

	public $displayField = 'DESCRIPTION';

	public $findMethods = array(
		'select' => true,
	);

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'CHARACTER_SET_NAME' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'DEFAULT_COLLATE_NAME' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'DESCRIPTION' => array(
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

	protected function _findSelect($state, $query, $results = array()) {
		if ($state == 'before') {
			$query['fields'] = array(
				$this->alias . '.' . $this->primaryKey,
				$this->alias . '.' . $this->displayField,
			);
			return $query;
		}

		return Hash::combine($results, '{n}.' . $this->alias . '.' . $this->primaryKey, '{n}.' . $this->alias . '.' . $this->displayField);
	}
}
