<?php
App::uses('CmaAppModel', 'Cma.Model');
/**
 * GLOBALSTATU Model
 *
 */
class CmaGlobalStatus extends CmaAppModel {

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
	public $useTable = 'GLOBAL_STATUS';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'VARIABLE_NAME' => array(
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
}
