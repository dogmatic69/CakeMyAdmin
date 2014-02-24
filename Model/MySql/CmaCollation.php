<?php
App::uses('CmaAppModel', 'Cma.Model');
/**
 * COLLATION Model
 *
 */
class CmaCollation extends CmaAppModel {

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
	public $useTable = 'COLLATIONS';

	public $primaryKey = 'COLLATION_NAME';

	public $displayField = 'CHARACTER_SET_NAME';

	public $findMethods = array(
		'select' => true,
	);

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'COLLATION_NAME' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
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
		'IS_DEFAULT' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'IS_COMPILED' => array(
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

			return $query;
		}

		if (empty($results)) {
			return $results;
		}

		$return = array();
		foreach ($results as $result) {
			$search = array(
				'_ci',
				'_cs',
			);
			$replace = array(
				sprintf(' (%s)', __d('cma', 'Case Insensitive')),
				sprintf(' (%s)', __d('cma', 'Case Sensitive')),
			);
			$niceName = Inflector::humanize(str_replace($search, $replace, $result[$this->alias][$this->primaryKey]));
			$return[$result[$this->alias][$this->displayField]][$result[$this->alias][$this->primaryKey]] = $niceName;
		}

		return $return;
	}
}
