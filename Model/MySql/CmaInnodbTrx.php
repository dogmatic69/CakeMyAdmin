<?php
App::uses('CmaAppModel', 'Cma.Model');
/**
 * INNODBTRX Model
 *
 * @property Trx $Trx
 * @property TrxRequestedLock $TrxRequestedLock
 * @property TrxMysqlThread $TrxMysqlThread
 */
class CmaInnodbTrx extends CmaAppModel {

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
	public $useTable = 'INNODB_TRX';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'trx_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'trx_state' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'trx_started' => array(
			'datetime' => array(
				'rule' => array('datetime'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'trx_isolation_level' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'trx_unique_checks' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'trx_foreign_key_checks' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'trx_adaptive_hash_latched' => array(
			'numeric' => array(
				'rule' => array('numeric'),
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
		'Trx' => array(
			'className' => 'Cma.CmaInnodbTrx',
			'foreignKey' => 'trx_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TrxRequestedLock' => array(
			'className' => 'Cma.TrxRequestedLock',
			'foreignKey' => 'trx_requested_lock_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TrxMysqlThread' => array(
			'className' => 'Cma.TrxMysqlThread',
			'foreignKey' => 'trx_mysql_thread_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
