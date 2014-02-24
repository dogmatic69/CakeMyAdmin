<?php
App::uses('CmaAppModel', 'Cma.Model');
/**
 * INNODBLOCKWAIT Model
 *
 * @property RequestingTrx $RequestingTrx
 * @property RequestedLock $RequestedLock
 * @property BlockingTrx $BlockingTrx
 * @property BlockingLock $BlockingLock
 */
class CmaInnodbLockWait extends CmaAppModel {

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
	public $useTable = 'INNODB_LOCK_WAITS';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'requesting_trx_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'requested_lock_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'blocking_trx_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'blocking_lock_id' => array(
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

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'RequestingTrx' => array(
			'className' => 'Cma.RequestingTrx',
			'foreignKey' => 'requesting_trx_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'RequestedLock' => array(
			'className' => 'Cma.RequestedLock',
			'foreignKey' => 'requested_lock_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'BlockingTrx' => array(
			'className' => 'Cma.BlockingTrx',
			'foreignKey' => 'blocking_trx_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'BlockingLock' => array(
			'className' => 'Cma.BlockingLock',
			'foreignKey' => 'blocking_lock_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
